<?php

$fptr = fopen("k.txt","r");

while($a = fgetc($fptr))
{
    echo $a;
    if($a == ".")
    {
    break;
    }
}

fclose($fptr);




?>