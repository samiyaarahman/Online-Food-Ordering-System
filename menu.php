<?php
session_start();
require_once("./backend/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="menu.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="header-content">
            <div class="restaurant-info">
                <img src="img/food.jpg" alt="Restaurant 1" class="restaurant-image">
                <h1 class="restaurant-name">Chunks</h1>
            </div>
            <div class="navbar">
                <a href="index.php" style="text-decoration: none;">Home</a>
                <a href="Cart.php">Cart</a>
                <a href="aboutus.php">About</a>
                <?php if (isset($_SESSION['username'])): ?>
                    <a href="#"><?php echo htmlspecialchars($_SESSION['username']); ?></a>
                    <a href="logout.php" style="text-decoration: none;">Logout</a>
                <?php else: ?>
                    <a href="practice.php" style="text-decoration: none;">Login</a>
                <?php endif; ?>
                <a href="adminlogin.php" style="text-decoration: none;">Admin Login</a>
            </div>
        </div>
    </header>

    <h2 class="menu-title">Menu</h2>
    
    <div class="menu-section">
        <div class="food-item" onclick="showPopup('Chicken Sandwich', 'Grilled chicken sandwich with lettuce and sauce.', 'img/sand2.jpg', '1', 220)">
            <img src="img/sand2.jpg" alt="Food 1">
            <h2>Chicken Sandwich</h2>
            <p>Grilled chicken sandwich with lettuce and sauce.</p>
            <p class="price">220tk</p>
            <button>View</button>
        </div>
        <div class="food-item" onclick="showPopup('Pasta', 'Grilled chicken sandwich with lettuce and sauce.', 'img/pasta.jpg', '1', 290)">
            <img src="img/pasta.jpg" alt="Food 1">
            <h2>Pasta</h2>
            <p>Grilled chicken sandwich with lettuce and sauce.</p>
            <p class="price">290tk</p>
            <button>View</button>
        </div>
        <div class="food-item" onclick="showPopup('Beef Steak', 'Grilled chicken sandwich with lettuce and sauce.', 'img/Beef steak.jpg', '1', 750)">
            <img src="img/Beef steak.jpg" alt="Food 1">
            <h2>Beef Steak</h2>
            <p>Grilled chicken sandwich with lettuce and sauce.</p>
            <p class="price">750tk</p>
            <button>View</button>
        </div>
        <div class="food-item" onclick="showPopup('Burger', 'Grilled chicken sandwich with lettuce and sauce.', 'img/Burger image.jpg', '1', 250)">
            <img src="img/Burger image.jpg" alt="Food 1">
            <h2>Burger</h2>
            <p>Grilled chicken sandwich with lettuce and sauce.</p>
            <p class="price">250tk</p>
            <button>View</button>
        </div>
        <div class="food-item" onclick="showPopup('Pizza', 'Grilled chicken sandwich with lettuce and sauce.', 'img/Pizza.jpg', '1', 499)">
            <img src="img/Pizza.jpg" alt="Food 1">
            <h2>Pizza</h2>
            <p>Grilled chicken sandwich with lettuce and sauce.</p>
            <p class="price">499tk</p>
            <button>View</button>
        </div>
        <div class="food-item" onclick="showPopup('Chiken Chawmein', 'Grilled chicken sandwich with lettuce and sauce.', 'img/Chicken Chawmein.jpg', '1', 220)">
            <img src="img/Chicken Chawmein.jpg" alt="Food 1">
            <h2>Chiken Chawmein</h2>
            <p>Grilled chicken sandwich with lettuce and sauce.</p>
            <p class="price">220tk</p>
            <button>View</button>
        </div>
        <div class="food-item" onclick="showPopup('Chicken Fry', 'Grilled chicken sandwich with lettuce and sauce.', 'img/chicken.jpg', '1', 160)">
            <img src="img/chicken.jpg" alt="Food 1">
            <h2>Chicken Fry</h2>
            <p>Grilled chicken sandwich with lettuce and sauce.</p>
            <p class="price">160tk</p>
            <button>View</button>
        </div>
        <div class="food-item" onclick="showPopup('Mixed Fried Rice', 'Grilled chicken sandwich with lettuce and sauce.', 'img/Fried Rice.jpg', '1', 220)">
            <img src="img/Fried Rice.jpg" alt="Food 1">
            <h2>Mixed Fried Rice</h2>
            <p>Grilled chicken sandwich with lettuce and sauce.</p>
            <p class="price">220tk</p>
            <button>View</button>
        </div>
        <div class="food-item" onclick="showPopup('Hydrabadi Biriyani', 'Grilled chicken sandwich with lettuce and sauce.', 'img/Hydrabadi Biriyani.jpg', '1', 450)">
            <img src="img/Hydrabadi Biriyani.jpg" alt="Food 1">
            <h2>Hydrabadi Biriyani</h2>
            <p>Grilled chicken sandwich with lettuce and sauce.</p>
            <p class="price">450tk</p>
            <button>View</button>
        </div>
        <div class="food-item" onclick="showPopup('Kacchi', 'Grilled chicken sandwich with lettuce and sauce.', 'img/Kacchi.jpg', '1', 550)">
            <img src="img/Kacchi.jpg" alt="Food 1">
            <h2>Kacchi</h2>
            <p>Grilled chicken sandwich with lettuce and sauce.</p>
            <p class="price">550tk</p>
            <button>View</button>
        </div>
        <div class="food-item" onclick="showPopup('French Fries', 'Grilled chicken sandwich with lettuce and sauce.', 'img/French Fries.jpg', '1', 150)">
            <img src="img/French Fries.jpg" alt="Food 1">
            <h2>French Fries</h2>
            <p>Grilled chicken sandwich with lettuce and sauce.</p>
            <p class="price">150tk</p>
            <button>View</button>
        </div>
        <div class="food-item" onclick="showPopup('Sushi', 'Grilled chicken sandwich with lettuce and sauce.', 'img/sushi.jpg', '1', 220)">
            <img src="img/sushi.jpg" alt="Food 1">
            <h2>Sushi</h2>
            <p>Grilled chicken sandwich with lettuce and sauce.</p>
            <p class="price">220tk</p>
            <button>View</button>
        </div>
        <div class="food-item" onclick="showPopup('Fish Finger', 'Grilled chicken sandwich with lettuce and sauce.', 'img/Fish Finger.jpg', '1', 250)">
            <img src="img/Fish Finger.jpg" alt="Food 1">
            <h2>Fish Finger</h2>
            <p>Grilled chicken sandwich with lettuce and sauce.</p>
            <p class="price">250tk</p>
            <button>View</button>
        </div>
        <div class="food-item" onclick="showPopup('Chicken Salad', 'Grilled chicken sandwich with lettuce and sauce.', 'img/Chicken salad.jpg', '1', 280)">
            <img src="img/Chicken salad.jpg" alt="Food 1">
            <h2>Chicken Salad</h2>
            <p>Grilled chicken sandwich with lettuce and sauce.</p>
            <p class="price">280tk</p>
            <button>View</button>
        </div>
        <div class="food-item" onclick="showPopup('Cold coffee', 'Grilled chicken sandwich with lettuce and sauce.', 'img/Cold Coffee.jpg', '1', 180)">
            <img src="img/Cold Coffee.jpg" alt="Food 1">
            <h2>Cold coffee</h2>
            <p>Grilled chicken sandwich with lettuce and sauce.</p>
            <p class="price">180tk</p>
            <button>View</button>
        </div>
        <div class="food-item" onclick="showPopup('Lemonade', 'Grilled chicken sandwich with lettuce and sauce.', 'img/Lemonade.jpg', '1', 160)">
            <img src="img/Lemonade.jpg" alt="Food 1">
            <h2>Lemonade</h2>
            <p>Grilled chicken sandwich with lettuce and sauce.</p>
            <p class="price">160tk</p>
            <button>View</button>
        </div>
        <div class="food-item" onclick="showPopup('Sparkle Water', 'Grilled chicken sandwich with lettuce and sauce.', 'img/Sparkle water.jpg', '1', 160)">
            <img src="img/Sparkle water.jpg" alt="Food 1">
            <h2>Sparkle Water</h2>
            <p>Grilled chicken sandwich with lettuce and sauce.</p>
            <p class="price">160tk</p>
            <button>View</button>
        </div>
        <div class="food-item" onclick="showPopup('Strawberry Milkshake', 'Grilled chicken sandwich with lettuce and sauce.', 'img/strawberry-milkshake-table.jpg', '1', 180)">
            <img src="img/strawberry-milkshake-table.jpg" alt="Food 1">
            <h2>Strawberry Milkshake</h2>
            <p>Grilled chicken sandwich with lettuce and sauce.</p>
            <p class="price">180tk</p>
            <button>View</button>
        </div>
        <div class="food-item" onclick="showPopup('Hot Chocolate', 'Grilled chicken sandwich with lettuce and sauce.', 'img/hot-chocolate-with-cinnamon-stick-dried-orange-slices.jpg', '1', 220)">
            <img src="img/hot-chocolate-with-cinnamon-stick-dried-orange-slices.jpg" alt="Food 1">
            <h2>Hot Chocolate</h2>
            <p>Grilled chicken sandwich with lettuce and sauce.</p>
            <p class="price">220tk</p>
            <button>View</button>
        </div>
        <div class="food-item" onclick="showPopup('Momos', 'Grilled chicken sandwich with lettuce and sauce.', 'img/Momos.jpg', '1', 150)">
            <img src="img/Momos.jpg" alt="Food 1">
            <h2>Momos</h2>
            <p>Grilled chicken sandwich with lettuce and sauce.</p>
            <p class="price">150tk</p>
            <button>View</button>
        </div>

        <!-- Add more food items here... -->
    </div>

    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="hidePopup()">&times;</span>
            <img id="popup-image" src="" alt="Food Image">
            <h2 id="popup-title"></h2>
            <p id="popup-description"></p>
            <p id="popup-price" class="price"></p>
            <label for="quantity">Quantity:</label>
            <div class="quantity-controls">
                <button onclick="updateQuantity(-1)">-</button>
                <input type="number" id="quantity" name="quantity" min="1" value="1">
                <button onclick="updateQuantity(1)">+</button>
            </div>
            
            <form id="addToCartForm" action="add_to_cart.php" method="POST">
                <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'] ?? ''; ?>"> 
                <input type="hidden" name="food_item_id" id="food_item_id" value="">
                <input type="hidden" name="food_price" id="food_price" value="">
                <input type="hidden" name="food_name" id="food_name" value="">
                <input type="hidden" name="quantity" id="quantity_hidden" value="1">
                <button type="submit" onclick="addToCart()">Add to Cart</button>
            </form>
        </div>
    </div>

    <script>
function showPopup(title, description, imageUrl, foodItemId, price) {
    document.getElementById('popup-title').innerText = title;
    document.getElementById('food_name').value = title;
    document.getElementById('popup-description').innerText = description;
    document.getElementById('popup-image').src = imageUrl;
    document.getElementById('food_item_id').value = foodItemId;
    document.getElementById('food_price').value = price;
    document.getElementById('popup-price').innerText = `Price: ${price.toFixed(2)}tk`;
    document.getElementById('popup').classList.add('active');
}

function hidePopup() {
    document.getElementById('popup').classList.remove('active');
}

function updateQuantity(amount) {
    const quantityInput = document.getElementById('quantity');
    let currentQuantity = parseInt(quantityInput.value);
    currentQuantity += amount;
    if (currentQuantity < 1) {
        currentQuantity = 1;
    }
    quantityInput.value = currentQuantity;
}

function addToCart() {
    const quantity = document.getElementById('quantity').value;
    document.getElementById('quantity_hidden').value = quantity;
    alert(`Item added to cart! Quantity: ${quantity}`);
    hidePopup();
}
    </script>
</body>
</html>