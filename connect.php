<?php

$conn=mysqli_connect("localhost","root","","db2") or die("connection unsuccesful") ;

if($conn)
{
    echo "connection succesful";
}

?>