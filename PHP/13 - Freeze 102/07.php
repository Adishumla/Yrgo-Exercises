<?php

declare(strict_types=1);

function getNames(array $actors): array
{
    $names = [];
    foreach ($actors as $actor) {
        $names[] = $actor['name'];
    }
    return $names;
}

$actors = [
    ['name' => 'Barry Nelson', 'character' => 'Stuart Ullman'],
    ['name' => 'Danny Lloyd', 'character' => 'Danny Torrance'],
    ['name' => 'Jack Nicholson', 'character' => 'Jack Torrance'],
    ['name' => 'Scatman Crothers', 'character' => 'Dick Hallorann'],
    ['name' => 'Shelley Duvall', 'character' => 'Wendy Torrance'],
];

$names = getNames($actors);

print_r($names);
