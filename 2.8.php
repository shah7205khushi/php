<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $targetDirectory = "k/";
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Allow only specific file types
    $allowedExtensions = array("doc", "docx", "pdf", "ppt", "pptx");
    if (!in_array($fileType, $allowedExtensions)) {
        echo "Sorry, only DOC, DOCX, PDF, PPT, and PPTX files are allowed.";
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
    <title>Document Upload</title>
</head>
<body>
    <h2>Upload DOC, PDF, PPT Files</h2>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload File" name="submit">
    </form>
</body>
</html>
