<?php

declare(strict_types=1);

$show = [
    'title' => 'Girls',
    'tmdb_url' => 'https://www.themoviedb.org/tv/42282-girls',
    'description' => 'The assorted humiliations, disasters and rare triumphs of four very different twenty-something girls: Hannah, an aspiring writer; Marnie, an art gallery assistant and cousins Jessa and Shoshanna.',
];


$encoded = json_encode($show);

/* header('Content-Type: JSON');
echo $encoded; */

/* save to show.json */

$location = 'show.json';

file_put_contents($location, $encoded);
