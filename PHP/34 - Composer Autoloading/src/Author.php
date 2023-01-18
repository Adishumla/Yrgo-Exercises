<?php

declare(strict_types=1);

namespace App;

class Author
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
