<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- File Handling Functions
 fopen
 fread
 fwrite
 fclose
 file_exists
 is_readable
 is_writable
 fgets
 file
 file_get_contents
 file_put_contents
 ftell
 fseek
 rewind
 copy
 unlink
 rename -->
<?php

 $file = fopen("test.txt","r");
// fread($file,"100");
// fclose($file);


// $file = fopen("test.txt","r");
// //echo $file;
// echo fread($file,"100");
// echo "<br>";


// echo fread($file,filesize("test.txt"));

// $files = fopen("testw.txt","a");
// fwrite($files,"Hello World. Testing!");
// echo fgets($files);

/*while(!feof($file))
{
    echo fgets($file). "<br />";
}*/

//print_r(file("testr.txt"));

//echo file_get_contents("testr.txt");
//echo "<br>";

//echo file_put_contents("test.txt","Hello World. Testing!");
//echo "<br>";

// echo ftell($file);
// echo "<br>";

// fseek($file,10,SEEK_CUR);
// echo ftell($file);



fclose($file);



?>
</body>
</html>