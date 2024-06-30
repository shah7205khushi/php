<?php

require_once("connect.php");
$query = "select * from student";
$result = mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<table border="1" align = "center">

<tr>
<td>Name</td>
<td>Course</td>
<td>Department</td>
<td colspan="2">action</td>
</tr>

<?php

while($rows=mysqli_fetch_assoc($result))
{
    ?>

<tr>

<td><?php echo $rows["Name"];?></td>
<td><?php echo $rows["Course"];?></td>
<td><?php echo $rows["Department"];?></td>
<td><a href="edit.php?id=<?php echo $rows['id'];?>">edit</a></td>
<td><a href="delete.php?id=<?php echo $rows['id'];?>">delete</a></td>

</tr>
<?php    

}

?>




</table>
</body>
</html>