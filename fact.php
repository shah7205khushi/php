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
    $factorial = 1;

    for($i = 2 ;$i <= $number ;$i++ )
    {
        $factorial = $factorial * $i;
    }

    echo "factorial of $number is $factorial";
}


?>
<form name = "f1" method = "POST" action ="">
    enter the num:
   <input type = "text" name= "num" >
   <br>
   <input type = "submit" value = "calculate factorial"> 

</body>
</html>