<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "shopping_cart");

// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// Initialize cart session if not already set
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Handle add to cart action
if (isset($_GET['action']) && $_GET['action'] == 'add' && isset($_GET['id'])) {
    $product_id = $_GET['id'];
    // Add product ID to session cart array
    $_SESSION['cart'][] = $product_id;
}

// Fetch cart items
$cart_items = isset($_SESSION['cart']) ? array_count_values($_SESSION['cart']) : [];

$cart_products = [];
if (!empty($cart_items)) {
    $product_ids = implode(',', array_keys($cart_items));
    $sql = "SELECT * FROM products WHERE id IN ($product_ids)";
    $result = mysqli_query($conn, $sql);

    // if (!$result) {
    //     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    // } else {
        $cart_products = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //}
}

//mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    <h1>Your Cart</h1>
    <ul>
        <?php foreach ($cart_products as $product): ?>
            <li>
                <img src="images/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" width="100">
                <h2><?php echo $product['name']; ?></h2>
                <p><?php echo $product['description']; ?></p>
                <p>$<?php echo $product['price']; ?></p>
                <p>Quantity: <?php echo $cart_items[$product['id']]; ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="index.php">Continue Shopping</a>
</body>
</html>
