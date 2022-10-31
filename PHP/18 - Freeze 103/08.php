<?php

declare(strict_types=1);

$characters = [
    'Arya Stark',
    'Bran Stark',
    'Cersei Lannister',
    'Daenerys Targaryen',
    'Davos Seaworth',
    'Jaime Lannister',
    'Jon Snow',
    'Jorah Mormont',
    'Sansa Stark',
    'Theon Greyjoy',
    'Tyrion Lannister',
];

// TODO: Implement the your logic here.

//array_map that that takes the last name from $characters and returns it sorted alphabetically and removes duplicates
$lastNames = array_map(function ($character) {
    $nameParts = explode(" ", $character);
    return $nameParts[1];
}, $characters);
$lastNames = array_unique($lastNames);
sort($lastNames);

?>
<ol>
    <?php foreach ($lastNames as $lastName) : ?>
        <li><?= $lastName ?></li>
    <?php endforeach; ?>
</ol>