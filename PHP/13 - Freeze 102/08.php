<?php

$actors = [
    ['name' => 'Barry Nelson', 'character' => 'Stuart Ullman'],
    ['name' => 'Danny Lloyd', 'character' => 'Danny Torrance'],
    ['name' => 'Jack Nicholson', 'character' => 'Jack Torrance'],
    ['name' => 'Scatman Crothers', 'character' => 'Dick Hallorann'],
    ['name' => 'Shelley Duvall', 'character' => 'Wendy Torrance'],
];

// array_filter to filter out the actors who played Jack Torrance
$filtered = array_filter($actors, function ($actor) {
    return $actor['character'] == 'Jack Torrance';
});
print_r($filtered);
