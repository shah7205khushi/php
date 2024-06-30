<?php

$fptr = fopen("k.txt","r");

// echo fgets($fptr);
// echo fgets($fptr);

//reading file line by line

// while($a=fgets($fptr))
// {
//     echo $a;
//     echo "<br>";
//     //break;
// }

//  echo "end of file";


//reading file character by character

while($a=fgetc($fptr))
{
    echo $a;
    //echo "<br>";
   // break;
}

echo "end of file";







?>