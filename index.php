<?php
session_start();
require_once("./backend/config.php");
require_once("./backend/table.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Food Ordering System MKS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo">Online Food Ordering System MKS</div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="Cart.php">Cart</a></li>
                    <li><a href="aboutus.php">About</a></li>
                    <?php if (isset($_SESSION['username'])): ?>
                        <li><a href="#"><?php echo htmlspecialchars($_SESSION['username']); ?></a></li>
                        <li><a href="logout.php">Logout</a></li>
                    <?php else: ?>
                        <li><a href="practice.php">Login</a></li>
                    <?php endif; ?>
                    <li><a href="adminlogin.php" style="text-decoration: none";>Admin Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="hero-text">
            <h1>Welcome to Online Food Ordering System MKS</h1>
            <button class="get-started-btn">Get Started</button>
        </div>
    </section>

    <section class="rest">
        <h2 id="restaurant-title" align="center">Restaurants</h2>
    </section>

    <div class="restaurant-menu">
        <div class="restaurant-item">
            <img src="img/img12.png" alt="Restaurant 1">
            <h2 class="restaurant-name">Chunks</h2>
            <p>Famous for: Italian Cuisine</p>
            <button><a href="menu.php" style="text-decoration: none;">View </a></button>
        </div>
        <div class="restaurant-item">
            <img src="img/img14.png" alt="Restaurant 2">
            <h2 class="restaurant-name">Vojon</h2>
            <p>Famous for: Chinese Dishes</p>
            <button><a href="menu.php" style="text-decoration: none;">View</a></button>
        </div>
        <div class="restaurant-item">
            <img src="img/res10.jpg" alt="Restaurant 3">
            <h2 class="restaurant-name">Boithok</h2>
            <p>Famous for: Indian Food</p>
            <button><a href="menu.php" style="text-decoration: none;">View</a></button>
        </div>
        <div class="restaurant-item">
            <img src="img/indeximg2.jpg" alt="Restaurant 4">
            <h2 class="restaurant-name">Pizzahut</h2>
            <p>Famous for: Continental Meals</p>
            <button><a href="menu.php" style="text-decoration: none;">View</a></button>
        </div>
        <div class="restaurant-item">
            <img src="img/res5.jpg" alt="Restaurant 1">
            <h2 class="restaurant-name">Niribili</h2>
            <p>Famous for: Italian Cuisine</p>
            <button><a href="menu.php" style="text-decoration: none;">View </a></button>
        </div>
        <div class="restaurant-item">
            <img src="img/res6.jpg" alt="Restaurant 2">
            <h2 class="restaurant-name">Uptown Grillers</h2>
            <p>Famous for: Chinese Dishes</p>
            <button><a href="menu.php" style="text-decoration: none;">View</a></button>
        </div>
        <div class="restaurant-item">
            <img src="img/res7.jpg" alt="Restaurant 3">
            <h2 class="restaurant-name">Pizzabahadur</h2>
            <p>Famous for: Indian Food</p>
            <button><a href="menu.php" style="text-decoration: none;">View</a></button>
        </div>
        <div class="restaurant-item">
            <img src="img/res8.jpg" alt="Restaurant 4">
            <h2 class="restaurant-name">Kudos</h2>
            <p>Famous for: Continental Meals</p>
            <button><a href="menu.php" style="text-decoration: none;">View</a></button>
        </div>
        <div class="restaurant-item">
            <img src="img/res9.jpg" alt="Restaurant 1">
            <h2 class="restaurant-name">Chillox</h2>
            <p>Famous for: Italian Cuisine</p>
            <button><a href="menu.php" style="text-decoration: none;">View </a></button>
        </div>
        <div class="restaurant-item">
            <img src="img/res10.jpg" alt="Restaurant 2">
            <h2 class="restaurant-name">Kacchi Dine</h2>
            <p>Famous for: Chinese Dishes</p>
            <button><a href="menu.php" style="text-decoration: none;">View</a></button>
        </div>
        <div class="restaurant-item">
            <img src="img/res8.jpg" alt="Restaurant 3">
            <h2 class="restaurant-name">The Flair</h2>
            <p>Famous for: Indian Food</p>
            <button><a href="menu.php" style="text-decoration: none;">View</a></button>
        </div>
        <div class="restaurant-item">
            <img src="img/indeximg2.jpg" alt="Restaurant 4">
            <h2 class="restaurant-name">Red Chili</h2>
            <p>Famous for: Continental Meals</p>
            <button><a href="menu.php" style="text-decoration: none;">View</a></button>
        </div>
        <div class="restaurant-item">
            <img src="img/img12.png" alt="Restaurant 1">
            <h2 class="restaurant-name">The Garden</h2>
            <p>Famous for: Italian Cuisine</p>
            <button><a href="menu.php" style="text-decoration: none;">View </a></button>
        </div>
        <div class="restaurant-item">
            <img src="img/img14.png" alt="Restaurant 2">
            <h2 class="restaurant-name">Alfresco</h2>
            <p>Famous for: Chinese Dishes</p>
            <button><a href="menu.php" style="text-decoration: none;">View</a></button>
        </div>
        <div class="restaurant-item">
            <img src="img/res10.jpg" alt="Restaurant 3">
            <h2 class="restaurant-name">Cafe darbar</h2>
            <p>Famous for: Indian Food</p>
            <button><a href="menu.php" style="text-decoration: none;">View</a></button>
        </div>
       
    </div>
    
</body>
</html>
