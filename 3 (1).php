<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    $temp="mSC2024";
?>
<form name="form1" method="post" action="4.php?n1=<?php echo $temp ?>">
    First Name: <input type="text" name="fname"> <br>
    Last Name: <input type="text" name="lname"> <br>
    Course Name: <input type="text" name="course"> <br>
    <input type="submit" name="submit">
</form>

</body>
</html>