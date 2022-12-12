<?php

define('GIPHY_KEY', 'kBDwqa1h6M7N6dct9wIBp9nJRkjv99MS');

// TODO: Implement gif search script here.
if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $url = 'https://api.giphy.com/v1/gifs/search?api_key=' . GIPHY_KEY . '&q=' . $search . '&limit=5';
    $response = file_get_contents($url);
    $response = json_decode($response);
    $gif = $response->data;
}
/* foreach ($gif as $gif) {
    echo '<img src="' . $gif->images->original->url . '" width="100%">';
} */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>09</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/spectre.css/0.5.5/spectre.min.css">
</head>

<body>
    <div class="container grid-sm">
        <form class="columns my-2" action="04.php" method="post">
            <div class="column col-9">
                <input type="search" name="search" placeholder="Search gifs..." class="form-input">
            </div>
            <div class="column col-3">
                <button type="submit" class="btn btn-primary btn-block">Search</button>
            </div>
        </form>
        <div class="columns my-2">
            <!-- show gifs from search -->
            <div class="column col-12 my-1">
                <?php if (isset($gif)) : ?>
                    <?php foreach ($gif as $gif) : ?>
                        <img src="<?= $gif->images->original->url ?>" width="100%">
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

</html>