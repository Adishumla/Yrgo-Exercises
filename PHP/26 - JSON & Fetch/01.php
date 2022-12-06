<?php

$content = file_get_contents('https://yrgo.github.io/api/movies/what-we-do-in-the-shadows.json');

// Convert JSON to PHP array
$movies = json_decode($content, true);
?>

<ul>
    <?php foreach ($movies as $movie) : ?>
        <li>
            <h3><?= $movie['name'] ?></h3>
        </li>
    <?php endforeach; ?>
</ul>