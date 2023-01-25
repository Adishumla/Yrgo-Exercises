<?php

declare(strict_types=1);

require __DIR__ . "/vendor/autoload.php";

use App\Database\QueryBuilder;
use App\Database\Connection;

$config = require __DIR__ . "/config.php";

$database = Connection::make($config['driver'], $config['host'], $config['database'], $config['username'], $config['password']);
