<?php
if (isset($_FILES['image'])) {
    $destination = __DIR__ . '/uploads/' . 'tom-hardy.gif';
    move_uploaded_file($_FILES['image']['tmp_name'], $destination);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04</title>
</head>

<body>
    <!-- TODO: Implement the image presentation here. -->
    <?php
    /* if (file_exists(__DIR__ . '/uploads/tom-hardy.gif')) {
        echo '<img src="uploads/tom-hardy.gif" alt="Tom Hardy">';
    } */

    if (isset($_FILES['image'])) {
        if ($_FILES['filename'] = 'tom-hardy.gif') {
            echo '<img src="uploads/tom-hardy.gif" alt="Tom Hardy">';
        }
    }


    ?>

    <form action="04.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="image">Please choose a GIF of Tom Hardy to upload</label>
            <input type="file" name="image" id="image" accept=".gif" required>
        </div>

        <button type="submit">Upload</button>
    </form>
</body>

</html>