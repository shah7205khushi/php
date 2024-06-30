<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Table Generator</title>
</head>
<body>

<h2>Generate Dynamic Table</h2>

<form method="post">
    <label for="num_rows">Number of Rows:</label>
    <input type="number" id="num_rows" name="num_rows" required><br><br>

    <label for="num_cols">Number of Columns:</label>
    <input type="number" id="num_cols" name="num_cols" required><br><br>

    <input type="submit" value="Generate Table">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num_rows = $_POST["num_rows"];
    $num_cols = $_POST["num_cols"];

    echo "<h3>Generated Table</h3>";
    echo "<table border='1'>";
    for ($i = 1; $i <= $num_rows; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $num_cols; $j++) {
            echo "<td> $i,  $j</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>

</body>
</html>
