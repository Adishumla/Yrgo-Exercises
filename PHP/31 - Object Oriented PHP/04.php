<?php

require __DIR__ . "/src/Person.php";
require __DIR__ . "/src/Employee.php";

$employee = new Employee("Susan");
$employee->setYearlySalary(684000);

printf(
    '%s earns %d kr a month at Yrgo',
    $employee->name,
    $employee->getMonthlySalary(),
); // Susan Johansson earns 57000 kr a month at Yrgo