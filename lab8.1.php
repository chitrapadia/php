<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
</head>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select Image:
    <input type="file" name="image" required><br><br>

    <input type="submit" name="upload" value="Upload">
</form>

</body>
</html>