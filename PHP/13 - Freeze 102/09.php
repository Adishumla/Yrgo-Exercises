<?php

$actors = [
    ['name' => 'Barry Nelson', 'character' => 'Stuart Ullman'],
    ['name' => 'Danny Lloyd', 'character' => 'Danny Torrance'],
    ['name' => 'Jack Nicholson', 'character' => 'Jack Torrance'],
    ['name' => 'Scatman Crothers', 'character' => 'Dick Hallorann'],
    ['name' => 'Shelley Duvall', 'character' => 'Wendy Torrance'],
];

$names = array_map(function ($actor) {
    $name = explode(' ', $actor['name']);
    return $name[1] . ' ' . $name[0];
}, $actors);

foreach ($names as $name) {
    echo "<p>$name</p>";
}
