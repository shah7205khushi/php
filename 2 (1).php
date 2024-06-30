<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

//php string

$x = "John";
echo "Hello $x";

echo"<hr>";

$x = "John";
echo 'Hello $x';

echo"<hr>";

echo strlen("Hello world!");

echo"<hr>";

echo str_word_count("Hello world!");

echo"<hr>";

echo strpos("Hello world!", "world");

echo"<hr>";

$x = "Hello World!";
echo strtoupper($x);

echo"<hr>";

$x = "Hello World!";
echo strtolower($x);

echo"<hr>";

$x = "Hello World!";
echo str_replace("World", "Dolly", $x);

echo"<hr>";

$x = "Hello World!";
echo strrev($x);

echo"<hr>";

$x = " Hello World! ";
echo trim($x);

echo"<hr>";

$x = "Hello World!";
$y = explode(" ", $x);

print_r($y);


?>


</body>
</html>