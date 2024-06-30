<?php
function fac($num)
{
    $result=1;
    for($i=2;$i<=$num;$i++)
    {
        $result =$result * $i;
    }
    return $result;
}

if(isset($_POST['num']))
{
$usernum=$_POST['num'];
$f_result=fac($usernum);
echo "factorial of $usernum is: $f_result";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>factorial calculator</title>
</head>
<body>
    <form method="POST" action "">
      enter a num:<br>
      <input type="text" name="number"><br>
      <input type="submit" value="calculate factorial">
</body>
</html>