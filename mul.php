<html>
<body>
<?php
//settype($num, "integer"); // $a is now integer
if(isset($_POST['num']))
{
    $number=$_POST['num'];
    $factorial=1;
    for($i=1;$i<=10;$i++)
    {
        $result=$number*$i;
        echo "the factorial of $number is $result<br>";
    }
    
}
   
?>

<form name-"f1" method="POST" action "">
      enter a num:<br>
      <input type="integer" name="num"><br>
      <input type="submit" value="calculate factorial">
      </form>
      </body>
   </html>   