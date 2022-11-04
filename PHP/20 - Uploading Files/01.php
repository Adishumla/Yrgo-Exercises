<?php
$fileSize = $_FILES['avatar']['size'];
$fileName = date('ymd-') . $_FILES['avatar']['name'];
echo "File size: $fileSize bytes <BR>";
//var_dump($_FILES['avatar']['size']);
if ($_FILES['avatar']['size'] < 1000000 && ($_FILES['avatar']['type'] == 'image/jpeg' || $_FILES['avatar']['type'] == 'image/png' || $_FILES['avatar']['type'] == 'image/jpg')) {
    echo "File is less than 2MB";
    move_uploaded_file($_FILES['avatar']['tmp_name'], 'images/' . $fileName);
} elseif ($_FILES['avatar']['type'] != 'image/jpeg' || $_FILES['avatar']['type'] != 'image/png' || $_FILES['avatar']['type'] != 'image/jpg') {
    echo "File is not an image";
} else {
    echo "File is too big";
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01</title>
</head>

<body>
    <form action="01.php" method="post" enctype="multipart/form-data">
        <div>
            <label for=" avatar">Choose a PNG image to upload</label>
            <input type="file" name="avatar" id="avatar" required>
        </div>

        <button type="submit">Upload</button>
    </form>
</body>

</html>