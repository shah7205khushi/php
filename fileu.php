<?php

include('upload.php');

?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

        <title>Php File Upload</title>
    </head>
    <body>
        <div class="container ">
            <h1 class="mt-5 text-center">PHP File Upload</h1>
            <br>
            <form action="" enctype="multipart/form-data" method="post">
                <input type="file" class="form-control" name="file">
                <br>
                <input type="submit" class="btn btn-primary" value="Upload" name="btn">
            </form>
            <br>
            <?php
if(isset($err)){
?>
            <div class="alert alert-danger"><?php echo $err; ?></div>
            <?php
}
if(isset($ses)){
    ?>
            <div class="alert alert-success"><?php echo $ses; ?></div>
            <br>
            <img src="<?php echo $dir; ?>" width="500px">
            <?php
    }
?>
        </div>
    </body>
</html>
