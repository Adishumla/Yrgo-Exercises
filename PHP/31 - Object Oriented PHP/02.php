<?php
require __DIR__ . "/src/Person.php";
require __DIR__ . "/src/Employee.php";
$susan = new Employee("Susan Johansson");
$susan->title = "principle";
printf(
    '%s is the %s at Yrgo',
    $susan->name,
    $susan->title,
); // Susan Johansson is the principal at Yrgo