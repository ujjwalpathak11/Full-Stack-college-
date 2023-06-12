<?php
$allowedTypes = ['jpeg', 'png'];
$maxSize = 2 * 1024 * 1024;
if ($_SERVER['REQUEST_METHOD']='POST' && isset($_FILES['file'])){
if($_FILES['file']['error'] === UPLOAD_ERR_OK) {
    if (in_array($_FILES['file']['type'], $allowedTypes)) {
        if ($_FILES['file']['size'] <= $maxSize) {
            $destination = 'C:/xampp/htdocs/prac/upload/' . $_FILES['file']['name'];
            move_uploaded_file($_FILES['file']['tmp_name'], $destination);
            echo 'File uploaded successfully.';
        } else {
            echo 'File size exceeds the allowed limit.';
        }
    } else {
        echo 'File type not allowed.';
    }
} else {
    echo 'Error uploading the file.';
}}
?>
<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
    <h1>File Upload</h1>
    <form method="post">
        <label for="file">Select File:</label>
        <input type="file" name="file" id="file" required>
        <br>
        <input type="submit" value="upload">
    </form>
</body>
</html>
