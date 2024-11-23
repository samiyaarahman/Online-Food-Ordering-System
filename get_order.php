<?php
require_once("./backend/config.php");

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

if (isset($_GET['user_id'])) {
    $user_id = intval($_GET['user_id']); // Sanitize input

    $query = "SELECT Quantity, food_name, total_price FROM cart WHERE UserID = ?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    echo json_encode($data);
} else {
    echo json_encode([]);
}
?>
