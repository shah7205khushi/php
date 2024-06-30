<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "product_comparison");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get selected product IDs from the form
    $product1_id = $_POST['product1'];
    $product2_id = $_POST['product2'];

    // Store selected product IDs in session
    $_SESSION['product1'] = $product1_id;
    $_SESSION['product2'] = $product2_id;
} else {
    // Fetch selected products from session
    $product1_id = $_SESSION['product1'];
    $product2_id = $_SESSION['product2'];
}

// Fetch product details
$sql = "SELECT * FROM products WHERE id IN ($product1_id, $product2_id)";
$result = mysqli_query($conn, $sql);

if (!$result) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
} else {
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Comparison</title>
    <style>
        .product {
            width: 45%;
            display: inline-block;
            vertical-align: top;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Product Comparison</h1>
    <div class="product">
        <h2><?php echo $products[0]['name']; ?></h2>
        <img src="images/<?php echo $products[0]['image']; ?>" alt="<?php echo $products[0]['name']; ?>" width="200">
        <p><?php echo $products[0]['description']; ?></p>
        <p>Price: $<?php echo $products[0]['price']; ?></p>
    </div>
    <div class="product">
        <h2><?php echo $products[1]['name']; ?></h2>
        <img src="images/<?php echo $products[1]['image']; ?>" alt="<?php echo $products[1]['name']; ?>" width="200">
        <p><?php echo $products[1]['description']; ?></p>
        <p>Price: $<?php echo $products[1]['price']; ?></p>
    </div>
    <a href="index.php">Go Back</a>
</body>
</html>
