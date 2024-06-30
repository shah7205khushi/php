<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    //$temp;
    // echo $_REQUEST["n1"];
    // echo "<br>";
    $a=array();
           if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            if(isset($_POST["fname"]))
            {
                echo $_POST["fname"];
                $a[$_POST["fname"]]=$_POST["fname"];
                echo "<br>";
                
            }
            if(isset($_POST["lname"]))
            {
                echo $_POST["lname"];
                $a[$_POST["lname"]]=$_POST["lname"];
                echo "<br>";
                
            }
            if(isset($_POST["course"]))
            {
                echo $_POST["course"];
                $a[$_POST["course"]]=$_POST["course"];
                echo "<br>";
                
            }
            print_r($a);
        }
        
    ?>

</body>
</html>

<!-- 
khushi
shah
Msc(cs)-IV
Array ( [khushi] => khushi [shah] => shah [Msc(cs)-IV] => Msc(cs)-IV ) -->