<?php

session_start();

$errors = [];

if (isset($_SESSION['errors'])) {
    // First we fetch the errors from the session and then we remove them. If we
    // keep them in the session the error messsages will reappear even when we
    // reload the page or resubmit the form.
    $errors = $_SESSION['errors'];
    unset($_SESSION['errors']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>06-09</title>
</head>

<body>
    <?php foreach ($errors as $error) : ?>
        <p><?php echo $error; ?></p>
    <?php endforeach; ?>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="images">Choose GIF images to upload</label>
            <input type="file" name="images[]" id="images" accept=".gif" multiple required>
        </div>

        <button type="submit">Upload</button>
    </form>
</body>

</html>