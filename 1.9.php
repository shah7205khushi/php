<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

if(isset($_POST["num"]))
{
    $number = ($_POST["num"]);
    $mul = 1;
    echo "multiplication table of $number";

for($i = 1 ; $i<= 10 ;$i++)
{
    $result = $number * $i  ;
    echo "<br>";
    echo "$number * $i = $result ";
}
 
}
?>
    
<form name="f1" method = "POST" action ="">
enter the number:
<input type = "text" name="num">
<br>
<input type = "submit" value = "generate multiplication table"> 
</body>
</html>