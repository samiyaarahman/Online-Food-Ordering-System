<?php
require_once("./backend/config.php");

// Create User Table
$user_table = "CREATE TABLE IF NOT EXISTS `user` (
    UserID INT PRIMARY KEY AUTO_INCREMENT,
    Username VARCHAR(50) NOT NULL,
    Email VARCHAR(100) NOT NULL UNIQUE,
    Password VARCHAR(100) NOT NULL,
    Contact VARCHAR(15) NOT NULL
)";
if (!mysqli_query($connection, $user_table)) {
    echo "Error creating User table: " . mysqli_error($connection);
}

// Create Admin Table
$admin_table = "CREATE TABLE IF NOT EXISTS `Admin` (
    AdminID INT PRIMARY KEY AUTO_INCREMENT,
    Name VARCHAR(50) NOT NULL,
    Username VARCHAR(50) NOT NULL UNIQUE,
    Email VARCHAR(100) NOT NULL UNIQUE,
    Password VARCHAR(100) NOT NULL
)";
if (!mysqli_query($connection, $admin_table)) {
    echo "Error creating Admin table: " . mysqli_error($connection);
}

// Create Order Table
$order_table = "CREATE TABLE IF NOT EXISTS orders (
    OrderID INT PRIMARY KEY AUTO_INCREMENT,
    UserID INT,
    user_name VARCHAR(50) NOT NULL,
    Order_Status VARCHAR(50) NOT NULL DEFAULT 'Pending',
    TotalAmount DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (UserID) REFERENCES `user`(UserID) ON DELETE CASCADE
)";
if (!mysqli_query($connection, $order_table)) {
    echo "Error creating orders table: " . mysqli_error($connection);
}

// Create Cart Table
$cart_table = "CREATE TABLE IF NOT EXISTS Cart (
    CartID INT PRIMARY KEY AUTO_INCREMENT,
    UserID INT,
    Quantity INT NOT NULL,
    total_price INT,
    FOREIGN KEY (UserID) REFERENCES `user`(UserID) ON DELETE CASCADE
)";
if (!mysqli_query($connection, $cart_table)) {
    echo "Error creating Cart table: " . mysqli_error($connection);
}

// Close connection
$connection->close();
?>
