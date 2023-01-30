<?php

declare(strict_types=1);


use App\Database\Connection;
use App\Database\QueryBuilder;

$database = new QueryBuilder(
    Connection::make('mysql', '127.0.0.1', 'pokemon', 'root', '')
);

$pokemons = $database->select()->from('pokemon')->get();

require __DIR__ . '/../views/pokedex.view.php';
