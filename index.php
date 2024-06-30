<?php

require_once("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="from1" method="post">
        NAME:<input type="text" name="Name">
        <br>
        <br>
        COURSE:<input type="text" name="Course">
        <br>
        <br>
        DEPARTMENT:<input type="text" name="Department">
        <br>
        <br>
        <input type="submit" value="save"name = "submit">
        <button><a href="display.php">view</a></button>



    </form>

    <?php

    if(isset($_POST["submit"]))
    {
        $Name = $_POST['Name'];
        $Course = $_POST['Course'];
        $Department = $_POST['Department'];
    

    $query="INSERT INTO student(Name,Course,Department) 
        VALUES ('$Name','$Course','$Department')";
    $result=mysqli_query($conn,$query);


}



?>
</body>
</html>