
<!DOCTYPE html>
<html>
<body>

<pre><?php


$uploads_dir = 'uploads';
foreach ($_FILES["pictures"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["pictures"]["tmp_name"][$key];
        $name = md5($_FILES["pictures"]["name"][$key]).'.png';
        move_uploaded_file($tmp_name, "$uploads_dir/$name");

        //persisitir nombre en base de datos y asociar a propiedad generada.
    }
}

?>
</pre>
<form action="files.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="pictures[]" id="fileToUpload">
    <input type="file" name="pictures[]" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>