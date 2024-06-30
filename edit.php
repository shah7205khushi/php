<?php

include("connect.php");
$id=$_GET['id'];
$select="SELECT * FROM student WHERE id='$id'";
$data=mysqli_query($conn,$select);
$row=mysqli_fetch_array($data);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        NAME:<input  value="<?php echo $row['Name']?>" type="text" name="Name">
        <br>
        <br>
        COURSE:<input type="text"   name="Course" value="<?php echo $row['Course'];?>">
        <br>
        <br>
        DEPARTMENT:<input type="text"   name="Department" value="<?php echo $row['Department'];?>">
        <br>
        <br>
        <input type="submit" value="update"name = "submit">
        <button><a href="display.php">Back</a></button>



    </form>

    <?php

    if(isset($_POST["submit"]))
    {
        $Name = $_POST["Name"];
        $Course=$_POST["Course"];
        $Department=$_POST["Department"];

        $update = "UPDATE student SET Name='$Name',Course='$Course',Department='$Department' WHERE id='$id'";
        $result=mysqli_query($conn,$update);
    }

?>
    </body>
</html>