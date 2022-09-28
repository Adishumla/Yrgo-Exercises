<?php

$actors = [
    ['name' => 'Andie MacDowell', 'year' => 1958],
    ['name' => 'Bill Murray', 'year' => 1950],
    ['name' => 'Chris Elliot', 'year' => 1960],
    ['name' => 'Stephen Tobowsky', 'year' => 1951],
];

for ($i = 0; $i < count($actors); $i++) {
    echo $actors[$i]['name'] . ' was born in ' . $actors[$i]['year'] . '<br>';
}
