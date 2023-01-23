<?php

declare(strict_types=1);
require __DIR__ . "/vendor/autoload.php";

use App\Person;

$person = new Person("Jay Bilzerian ", 13);
try {
    echo $person->license();
} catch (Exception $e) {
    echo $e->getMessage();
}
