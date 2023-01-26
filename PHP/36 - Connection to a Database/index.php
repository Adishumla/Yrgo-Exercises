<?php

require __DIR__ . '/vendor/autoload.php';

use App\Database\Connection;
use App\Database\QueryBuilder;

$database = new QueryBuilder(
    Connection::make('mysql', '127.0.0.1', 'pokemon', 'root', '')
);

$pokemon = $database->select()->from('pokemon')->get();

printf('There are %d pokemon in the database.', count($pokemon));
echo "<br>";
$pokemon = $database->select()->from('pokemon')->limit(5)->get();

echo count($pokemon); // 5
echo "<br>";

$pokemon = $database->select()->from('pokemon')->orderBy('name', 'asc')->limit(3)->get();

print_r($pokemon);
/*
Array
(
[0] => stdClass Object
    (
        [id] => 63
        [name] => Abra
    )
[1] => stdClass Object
    (
        [id] => 142
        [name] => Aerodactyl
    )
[2] => stdClass Object
    (
        [id] => 65
        [name] => Alakazam
    )
)
*/
echo "<br>";
$pokemon = $database->select()->from('pokemon')->orderBy('name', 'desc')->first();

echo $pokemon->name; // Zubat

echo "<br>";

$pokemon = $database->select()->from('pokemon')->where('id', '=', '18')->first();

echo $pokemon->name; // Pidgeot