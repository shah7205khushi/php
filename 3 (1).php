<?php
  echo $_FILES["fileToUpload"]["name"];
  echo "<br>";
  echo $_FILES["fileToUpload"]["size"];
  echo "<br>";
  echo $_FILES["fileToUpload"]["tmp_name"];
  echo "<br>";
  echo $_FILES["fileToUpload"]["error"];
  echo "<br>";
  echo $_FILES["fileToUpload"]["type"];
  echo "<br>";
  move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],"k/".$_FILES["fileToUpload"]["name"]) or 
  die("File is not moved");
?>
