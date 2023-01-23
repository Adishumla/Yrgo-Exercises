<?php

namespace App;

use Exception;
use App\HormoneMonster;

class Person
{
    public string $name;
    public int $age;
    public HormoneMonster $monster;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function license(): string
    {
        if ($this->age < 18) {
            throw new Exception($this->name . " is not old enough to drive");
        }
        return $this->name . " is old enough to drive";
    }
    public function addHormoneMonster(HormoneMonster $monster)
    {
        $this->monster = $monster;

        if ($this->age < 13) {
            throw new Exception($this->name . " is not old enough to have a hormone monster");
        }
    }
}
