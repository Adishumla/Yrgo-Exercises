<?php

declare(strict_types=1);
require __DIR__ . "/src/Person.php";
require __DIR__ . "/src/Student.php";

$johannes = new Student("Johannes Tveitan");
$johannes->addGrade("A");
$johannes->addGrade("E");

printf(
    'The student %s is graded with the following grades: %s',
    $johannes->name,
    implode(', ', $johannes->grades),
); // The student Johannes Tveitan is graded with the following grades: A, E