<?php

declare(strict_types=1);

session_start();

if (isset($_FILES['images'])) {
    $errors = [];
    $images = $_FILES['images'];

    // First we need to know how many files which were uploaded. We can check
    // the length of the array using the count function.
    $length = count($images['name']);

    // The developer behind the $_FILES superglobal was probably drunk while
    // building this feature. The array of files is structured by index. This
    // means we've to use a for instead of a foreach loop.
    for ($i = 0; $i < $length; $i++) {
        if ($images['type'][$i] !== 'image/gif') {
            $errors[] = 'The ' . $images['name'][$i] . ' image file type is not allowed.';
        }

        if ($images['size'][$i] >= 3145728) {
            $errors[] = 'The uploaded file ' . $images['name'][$i] . ' exceeded the filesize limit.';
        }
    }

    if (count($errors) > 0) {
        $_SESSION['errors'] = $errors;

        header('Location: /');
        // Note how we're using exit here? This is because the script will
        // continue even after we redirect the user back to the start page.
        // We need to tell the script to not upload the images if there are any
        // errors with the files.
        exit;
    }

    for ($i = 0; $i < $length; $i++) {
        $destination = __DIR__ . '/uploads/' . date('ymd') . '-' . $images['name'][$i];

        move_uploaded_file($images['tmp_name'][$i], $destination);
    }
}

header('Location: /');
// Note how we aren't using exit here? This is because the script end here. The
// script will exit by itself.