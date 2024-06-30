<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

#array function

$info=array('coffee', 'brown', 'caffeine');
// Listing all the variables
list($drink, $color, $power) = $info;
echo "$drink is $color and $power makes it special.\n";

echo"<hr>";

$info = array('coffee', 'brown', 'caffeine');
list($a[0], $a[1], $a[2]) = $info;
var_dump($a);

echo"<hr>";

$os = array("Mac", "NT", "Irix", "Linux");
if (in_array("NT", $os))
{
echo "Got NT";
}
if (in_array("mac", $os))
{
echo "Got mac";
}

echo"<hr>";

$transport = array('foot', 'bike', 'car', 'plane');
$mode = current($transport); // $mode = 'foot';
$mode = next($transport); // $mode = 'bike';
$mode = current($transport); // $mode = 'bike';
$mode = prev($transport); // $mode = 'foot';
$mode = end($transport); // $mode = 'plane';
$mode = current($transport); // $mode = 'plane';

$arr = array();
var_dump(current($arr)); // bool(false)
$arr = array(array());
var_dump(current($arr)); // array(0) { }

echo"<hr>";

// $foo = array('bob', 'fred', 'jussi', 'jouni', 'egon', 'marliese');
// $bar = each($foo);
// print_r($bar);

echo"<hr>";

$fruits = array("lemon", "orange", "banana", "apple");
sort($fruits);

foreach ($fruits as $key => $val) {
echo "fruits[" . $key . "] =" . $val. "\n";
}

echo"<hr>";

$fruits = array("lemon", "orange", "banana", "apple");
rsort($fruits);
foreach ($fruits as $key => $val) {
echo "$key = $val\n";
}

echo"<hr>";

$beginning = 'foo';
$end = array(1 => 'bar');
$result = array_merge((array)$beginning, (array)$end);
print_r($result);

echo"<hr>";

$input = array("php", 8.0,array("green", "red"));
$result = array_reverse($input);
print_r($result);
echo"<hr>";
$result_keyed = array_reverse($input, true);
print_r($result_keyed);


echo"<hr>";

#Miscellaneous Functions:

define("GREETING","Hello you! How are you today?");
echo constant("GREETING");

echo"<hr>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";

include("1.php");

echo"<hr>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";

require("1.php"); 

echo"<hr>";





?>
</body>
</html>