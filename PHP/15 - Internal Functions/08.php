<?php

declare(strict_types=1);

$actors = [
    'Abigail Savage',
    'Adrienne C. Moore',
    'Danielle Brooks',
    'Dascha Polanco',
    'Jackie Cruz',
    'Kate Mulgrew',
    'Kimiko Glenn',
    'Laura Prepon',
    'Lea DeLaria',
    'Michael Harney',
    'Nick Sandow',
    'Selenis Leyva',
    'Taryn Manning',
    'Taylor Schilling',
    'Uzo Aduba',
    'Yael Stone',
];

$actors = array_filter($actors, function ($actor) {
    return strpos($actor, 'K') === 0;
});
var_dump($actors);
