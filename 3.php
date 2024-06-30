<?php

if(isset($_POST['btn'])){
$file = $_FILES['file'];
$file_size = $file['size'];
$file_name = $file['name'];
// print_r($file);
$tmp = $file['tmp_name'];
$pathexe = pathinfo($file_name,PATHINFO_EXTENSION);
$ext = strtolower($pathexe);
$acext = array('doc','ppt','pdf','txt');


if($file_size == 0)
{
    $err = 'Select A image File';
    return false;
}


if($file_size > 500000)
{
    $err = 'Your FIle size Too Long';
    return false;
}

if (!in_array($ext,$acext)) {
    $err = 'invalid file Type';
    return false;
}

$dir = 'k/'.rand().".".$ext;

$upld = move_uploaded_file($tmp,$dir);

if($upld){
    $ses = 'File Uploaded';
}else{
    $err = 'file Not Upload';
}

}

?>