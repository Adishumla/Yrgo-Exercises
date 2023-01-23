<?php

declare(strict_types=1);
require __DIR__ . "/vendor/autoload.php";

use App\HormoneMonster;
use App\Person;

$person = new Person("Nick Birch", 12);

try {
    $person->addHormoneMonster(new HormoneMonster("Maury"));
} catch (Exception $e) {
    echo $e->getMessage();
}

printf('%s hormone monster is %s', $person->name, $person->monster->name); // Nick Birch hormone monster is Maury