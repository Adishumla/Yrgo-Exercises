<?php

class Employee extends Person
{
    public string $title;
    private int $yearlySalary;

    public function setYearlySalary(int $salary)
    {
        $this->yearlySalary = $salary;
    }

    public function getMonthlySalary(): float
    {
        return $yearlySalary = $this->yearlySalary / 12;
    }
}
