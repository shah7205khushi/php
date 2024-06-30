<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

//control statements

$a=10;
$b=25;

if ($a > $b) {
echo "a is greater than b";
} 
else {
echo "a is NOT greater than b";
}

echo "<hr>";

$i= "cake";

switch ($i) {
    case "apple":
    echo "i is apple";
    break;
    case "bar":
    echo "i is bar";
    break;
    case "cake":
    echo "i is cake";
    break;
    }

echo "<hr>";

echo $a < $b ?  "a is greater" :  "b is greater";

echo "<hr>";
echo "<hr>";
echo "<hr>";
echo "<hr>";
echo "<hr>";
echo "<hr>";
echo "<hr>";





?>

</body>
</html>