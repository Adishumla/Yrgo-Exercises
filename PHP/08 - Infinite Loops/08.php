<?php

$actors = [
    ['name' => 'Ally Sheedy ', 'year' => 1962],
    ['name' => 'Anthony Michael Hall', 'year' => 1968],
    ['name' => 'Emilio Estevez', 'year' => 1962],
    ['name' => 'Judd Nelson', 'year' => 1959],
    ['name' => 'Molly Ringwald', 'year' => 1968],
];

foreach ($actors as $actor) {
    // while actors were not born between 2 1960 and 1965 continue
    while ($actor['year'] < 1960 || $actor['year'] > 1965) {
        continue 2;
    }
    echo $actor['name'] . '<br>';
}
