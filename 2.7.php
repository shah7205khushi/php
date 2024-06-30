<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $targetDirectory = "k/";
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check file type
    if ($fileType != "mp3") {
        echo "Sorry, only MP3 files are allowed.";
        $uploadOk = 0;
    }

    // Check file size (max size 20MB)
    if ($_FILES["fileToUpload"]["size"] > 20000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($targetFile)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file upload status
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>MP3 File Upload</title>
</head>
<body>
    <h2>Upload an MP3 File</h2>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload MP3" name="submit">
    </form>
</body>
</html>
