<?php

include_once('2.php');
$sql="select * from emp";
$result =mysqli_query($conn,$sql);


$num_per_page=02;

if(isset($_GET["page"]))
{
    $page=$_GET["page"];
}
else
{

    $page=1;
}

$start_from=($page-1)*02;

$sql="select * from emp limit $start_from,$num_per_page";
$result = mysqli_query($conn,$sql);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagination in php</title>
</head>
<body>

<table align="center"  border="1px">
<tr>
    <th>emp_id</th>
    <th>emp_name</th>
    <th>email</th>
    <th>salary</th>
</tr>


<?php

while($rows=mysqli_fetch_array($result))
{
    ?>
    <tr>
        <td><?php echo $rows['emp_id'];?></td>
        <td><?php echo $rows['name'];?></td>
        <td><?php echo $rows['email'];?></td>
        <td><?php echo $rows['salary'];?></td>

    </tr>

    <?php

}

?>
</table>

<?php

$sql="select * from emp";
$result=mysqli_query($conn,$sql);
$total_records=mysqli_num_rows($result);
//echo $total_records;
$total_pages=ceil($total_records/$num_per_page);
//echo $total_pages;

for($i=1;$i<=$total_pages;$i++)
{
    echo "<a href='1.php?page=".$i."'>".$i."</a>";
}                                  

?>
</body>
</html>