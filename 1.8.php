<html>
<body>
<?php
//settype($num, "integer"); // $a is now integer
if(isset($_POST['num']))
{
 $number=$_POST['num'];
 $factorial=1;
 for($i=2;$i<=$number;$i++)
 {
 $factorial=$factorial*$i;
 }
 echo "the factorial of $number is $factorial";
}

?>
<form name="f1" method="POST" action ="">
 enter a num:<br>
 <input type="integer" name="num"><br>
 <input type="submit" value="calculate factorial">
 </form>
 </body>
 </html>
    