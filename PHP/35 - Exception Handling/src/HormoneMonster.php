<?php

declare(strict_types=1);

namespace App;

use Exception;

class HormoneMonster
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
