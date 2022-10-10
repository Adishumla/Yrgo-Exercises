<?php

$currentYear = date('Y');

$actors = [
    ['Christopher Læssø', 1995],
    ['Claes Bang', 1967],
    ['Dominic West', 1969],
    ['Elisabeth Moss', 1982],
    ['Terry Notary', 1968],
];
$decade = [[20, "twenties"], [30, "thirties"], [40, "forties"], [50, "fifties"], [60, "sixties"], [70, "seventies"], [80, "eighties"], [90, "nineties"]];

// TODO: Implement the foreach loop logic here.
foreach ($actors as $actor) {
    $decadeOfLife = floor(($currentYear - $actor[1]) / 10) * 10;
    echo $actor[0] . " is in their " . $decade[$decadeOfLife / 10 - 2][1] . "<br>";
}
