<?php

include('4.php');

?>

<!-- image validation -->

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Php File Upload</title>
    </head>
    <body>
        <div>
            <h1>PHP File Upload</h1>
            <br>


            <form action="" enctype="multipart/form-data" method="post">
                <input type="file"  name="file">
                <br>
                <input type="submit"  value="Upload" name="btn">
            </form>
            <br>
            <?php
if(isset($err)){
?>
            <div><?php echo $err; ?></div>
            <?php
}
if(isset($ses)){
    ?>
            <div><?php echo $ses; ?></div>
            <br>
            <img src="<?php echo $dir; ?>" width="500px">
            <?php
    }
?>
        </div>
    </body>
</html>