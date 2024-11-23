<?php
require_once("./backend/config.php");
session_start();
if ($connection) {
    echo ('');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Management</title>
    <link rel="stylesheet" href="order_manage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="wrapper">
        <nav class="sidebar">
            <div class="sidebar-header">
                <h2>Admin Site</h2>
                <button class="logout-btn"> 
                    <a href="index.php" style="text-decoration: none; color: white;">Logout</a>
                </button>
            </div>
            <ul>
                <li><a href="home.php"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="order_manage.php"><i class="fas fa-receipt"></i> Orders</a></li>
                <li><a href="userlist.php"><i class="fas fa-users"></i> Users</a></li>
                <li><a href="setting.php"><i class="fas fa-cogs"></i> Site Settings</a></li>
            </ul>
        </nav>
        <div class="main-content">
            <h1>Order Management</h1>
            <table class="order-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>UserId</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql_order = "SELECT * FROM orders";
                        $sql_user = "SELECT * FROM user";
                        $result_order = mysqli_query($connection, $sql_order);
                        $result_user = mysqli_query($connection, $sql_user);

                        if (!$result_order || !$result_user) {
                            die("Invalid query!");
                        }

                        while (($row_order = mysqli_fetch_assoc($result_order)) && ($row_user = mysqli_fetch_assoc($result_user))) {
                    ?>
                    <tr>
                        <td><?php echo $row_order['OrderID']; ?></td>
                        <td><?php echo $row_user['Username']; ?></td>
                        <td><?php echo $row_user['Email']; ?></td>
                        <td><?php echo $row_user['UserID']; ?></td>
                        <td><span class="status confirmed"><?php echo $row_order['Order_Status']; ?></span></td>
                        <td>
                            <button class="view-btn" onclick="viewOrder(<?php echo $row_user['UserID']; ?>)">View Order</button>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Popup Modal -->
    <div id="orderPopup" class="popup-modal">
        <div class="popup-content">
            <h2>Order</h2>
            <table class="popup-table">
                <thead>
                    <tr>
                        <th>Qty</th>
                        <th>Order</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody id="orderDetails">
                    <!-- Order details will be dynamically inserted here -->
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2" style="text-align: right;">TOTAL</td>
                        <td id="totalAmount">0.00</td>
                    </tr>
                </tfoot>
            </table>
            <div class="popup-buttons">
                <form action="update_order.php" method="POST">
                    <!-- Pass the order ID dynamically -->
                    <input type="hidden" id="popupOrderID" name="order_id" value="">
                    <button type="submit" name="orderConfirmSubmit">Confirm</button>
                </form>
                <button onclick="closeOrderPopup()">Close</button>
            </div>
        </div>
    </div>

    <script>
        // Function to fetch and display order data for a specific user
        function viewOrder(userId) {
            fetch(`get_order.php?user_id=${userId}`)
                .then(response => response.json())
                .then(data => {
                    let orderDetails = "";
                    let totalAmount = 0;

                    if (data.length > 0) {
                        data.forEach(item => {
                            orderDetails += `
                                <tr>
                                    <td>${item.Quantity}</td>
                                    <td>${item.food_name}</td>
                                    <td>${item.total_price.toFixed(2)}</td>
                                </tr>
                            `;
                            totalAmount += parseFloat(item.total_price);
                        });
                    } else {
                        orderDetails = `<tr><td colspan="3">No items in cart.</td></tr>`;
                    }

                    document.getElementById("orderDetails").innerHTML = orderDetails;
                    document.getElementById("totalAmount").innerText = totalAmount.toFixed(2);

                    // Set the order ID in the hidden input field for confirmation
                    document.getElementById("popupOrderID").value = userId;

                    showOrderPopup();
                })
                .catch(error => console.error("Error fetching order data:", error));
        }

        // Function to show the order popup
        function showOrderPopup() {
            document.getElementById("orderPopup").style.display = "flex";
        }

        // Function to close the order popup
        function closeOrderPopup() {
            document.getElementById("orderPopup").style.display = "none";
        }
    </script>
</body>
</html>
