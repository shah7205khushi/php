<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
#function in php (jay sir ppt)

$today = getdate();
print_r($today);

echo"<hr>";

$date = new DateTime();
$date->setDate(2023, 2, 3);
echo $date->format('Y-m-d');

echo"<hr>";

$date = date_create();
date_date_set($date, 2023, 2, 3);
echo date_format($date, 'Y-m-d');

#String Functions

echo chr(65);

echo"<hr>";

echo ord('C');

echo"<hr>";

$str = 'abcdefghijklm';
echo strlen($str);

echo"<hr>";

$chi="This is a test String";
echo strtolower($chi);

echo"<hr>";

$chi="This is a test String";
echo strtoupper($chi);

echo"<hr>";

echo $rest = substr("abcdef", -1);
// returns "f"
echo $rest = substr("abcdef", -2);
// returns "ef"
echo $rest = substr("abcdef", -3, 1);
// returns "d"
$rest = substr("abcdef", 0, -1);
// returns "abcde"
$rest = substr("abcdef", 2, -1);
// returns "cde"
$rest = substr("abcdef", 4, -4);
// returns ""
$rest = substr("abcdef", -3, -1);
// returns "de"

echo"<hr>";

echo substr('abcdef', 1);
echo"<hr>";
echo substr('abcdef', 1, 3);
echo"<hr>";
echo substr('abcdef', 0, 4);
echo"<hr>";
echo substr('abcdef', 0, 8);
echo"<hr>";
echo substr('abcdef', -1, 1);

echo"<hr>";

$string = 'abcdef';
echo $string[0];
echo"<br>";
echo $string[3];
echo"<br>";
echo $string[strlen($string)-1];

echo"<hr>";

$newstring = 'abcdef abcdef';
echo $pos = strpos($newstring, 'a', 1); 

echo"<hr>";

$mystring = "this is teis";
$pos = strrpos($mystring, "is");
echo $pos;

echo"<hr>";

echo strrev("Hello world!");





?>

<!-- output

Array ( [seconds] => 25 [minutes] => 45 [hours] => 10 [mday] => 10 [wday] => 6 [mon] => 2 [year] => 2024 [yday] => 40 [weekday] => Saturday [month] => February [0] => 1707558325 )
2023-02-03
2023-02-03A
67
13
this is a test string
THIS IS A TEST STRING
fefd
bcdef
bcd
abcd
abcdef
f
a
d
f
7
10
!dlrow olleH -->

</body>
</html>