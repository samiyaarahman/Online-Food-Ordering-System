<?php
require_once("./backend/config.php");

// Check if the connection is valid
if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Check if the OrderID is provided via POST
if (isset($_POST['orderConfirmSubmit']) && isset($_POST['order_id'])) {
    // Sanitize input
    $order_id = intval($_POST['order_id']);

    // Debug: Output the received Order ID
    echo "Received Order ID: " . $order_id;

    // Check if the order ID is valid
    if ($order_id > 0) {
        // Prepare the SQL query to update the order status to 'Confirmed'
        $query = "UPDATE orders SET Order_Status = 'Confirmed' WHERE OrderID = $order_id";

        // Debug: Output the query
        echo "Executing query: $query";

        // Execute the query
        if (mysqli_query($connection, $query)) {
            // Redirect back to the order management page after successful update
            header("Location: order_manage.php");
            exit();
        } else {
            echo "Error executing query: " . mysqli_error($connection);
        }
    } else {
        echo "Invalid Order ID!";
    }
} else {
    echo "Order ID not provided!";
}
?>
