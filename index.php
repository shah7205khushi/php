<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "product_comparison");

// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// Fetch products
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

if (!$result) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
} 
else {
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

mysqli_close($conn);
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
    <form action="comparison.php" method="post">
        <label for="product1">Select Product 1:</label>
        <select name="product1" id="product1">
            <?php foreach ($products as $product): ?>
                <option value="<?php echo $product['id']; ?>"><?php echo $product['name']; ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <label for="product2">Select Product 2:</label>
        <select name="product2" id="product2">
            <?php foreach ($products as $product): ?>
                <option value="<?php echo $product['id']; ?>"><?php echo $product['name']; ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <button type="submit">Compare</button>
    </form>
</body>
</html>
