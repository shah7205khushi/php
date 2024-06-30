<?php

//$a = readfile("k.txt");
//echo $a;

//readfile("k.txt");

$fptr = fopen("k.txt","r");

if(!$fptr)
{
    die("unable to open the file");
}

//$content = fread($fptr,20);
//$content = fread($fptr,filesize("k.txt"));

echo $content;

fclose($fptr);






?>