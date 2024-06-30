<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "shopping_cart");

// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// Fetch products
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

// if (!$result) {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// } else {
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
// }

//mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Listing</title>
</head>
<body>
    <h1>Product Listing</h1>
    <ul>
        <?php foreach ($products as $product): ?>
            <li>
                <img src="images/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" width="100">
                <h2><?php echo $product['name']; ?></h2>
                <p><?php echo $product['description']; ?></p>
                <p>$<?php echo $product['price']; ?></p>
                <a href="cart.php?action=add&id=<?php echo $product['id']; ?>">Add to Cart</a>
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="cart.php">View Cart</a>
</body>
</html>
