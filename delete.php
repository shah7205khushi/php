<?php 

require_once("connect.php");

 $id=$_GET['id'];
 $query="DELETE FROM student WHERE id='$id'";
 $data=mysqli_query($conn,$query);
 header("location:display.php");
 ?>
