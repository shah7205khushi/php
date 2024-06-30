<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

//files


//reading from file 

//$a = readfile("k.txt");
//echo $a;

//readfile("k.txt");

// $fptr = fopen("k.txt","r");

// if(!$fptr)
// {
//     die("unable to open the file");
// }

//$content = fread($fptr,20);
//$content = fread($fptr,filesize("k.txt"));

// echo $content;

// fclose($fptr);


//$fptr = fopen("k.txt","r");

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

// while($a=fgetc($fptr))
// {
//     echo $a;
//     //echo "<br>";
//    // break;
// }

// echo "end of file";


// $fptr = fopen("k.txt","r");

// while($a = fgetc($fptr))
// {
//     echo $a;
//     if($a == ".")
//     {
//     break;
//     }
// }

// fclose($fptr);



//writing in file

// $file = fopen("k.txt","w");
// echo fwrite($file,"Hello World.Testing!");
// fclose($file);



//echo file_exists("test.txt");



// $file = "test.txt";
// if(is_readable($file))
// {
// echo ("$file is readable");
// }
// else
// {
// echo ("$file is not readable");
// }



// $file = "test.txt";
// if(is_writable($file))
// {
// echo ("$file is writeable");
// }
// else
// {
// echo ("$file is not writeable");
// }


//print_r(file("test.txt"));


//echo file_get_contents("k.txt");


//echo file_put_contents("test1.txt","HelloWorld. Testing! how are you");


//appending file

// $file = fopen("kh.txt","a");
// echo fwrite($file,"my name is jil. i am in appolo international school.i live in ahmedabad!");
// fclose($file);


//echo copy("k.txt","J.txt");


//deleting file 

// $file = "test1.txt";
// if (!unlink($file))
// {
// echo ("Error deleting $file");
// }
// else
// {
// echo ("Deleted $file");
// }


//rename("J.txt","jil.txt");

// $h = fopen("test.txt","r");
// fseek($h,15);
// $data = fread($h,10);
// echo $data;
// echo "<br>";
// echo ftell($h);
// rewind($h);
// echo "<br>";
// echo ftell($h);







 



?>
</body>
</html>