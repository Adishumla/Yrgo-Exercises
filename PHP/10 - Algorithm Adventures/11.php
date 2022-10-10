<?php

use function PHPSTORM_META\type;

$actors = [
    ['Christopher Læssø', 1995],
    ['Claes Bang', 1967],
    ['Dominic West', 1969],
    ['Elisabeth Moss', 1982],
    ['Terry Notary', 1968]
];

// TODO: Implement the foreach loop logic here.
// match expression the actors birthdate to the decade
foreach ($actors as $actor) {
    $decadeOfLife = match (floor(($actor[1] % 100) / 10) * 10) {
        20.0 => "twenties",
        30.0 => "thirties",
        40.0 => "forties",
        50.0 => "fifties",
        60.0 => "sixties",
        70.0 => "seventies",
        80.0 => "eighties",
        90.0 => "nineties",
        default => "unknown"
    };
    echo $actor[0] . " was born in the " . $decadeOfLife . "<br>";
}
