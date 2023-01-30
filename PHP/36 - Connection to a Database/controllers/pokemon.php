<?php

declare(strict_types=1);


use App\Database\Connection;
use App\Database\QueryBuilder;

$database = new QueryBuilder(
    Connection::make('mysql', '127.0.0.1', 'pokemon', 'root', '')
);

$pokemon = $database->select()->from('pokemon')->where('id', '=', $_GET['id'])->first();

require __DIR__ . '/../views/pokemon.view.php';
