<?php

declare(strict_types=1);

function transformName(string $name): string
{
    //first word is the first name and the rest is the last name
    $nameParts = explode(" ", $name);
    $firstName = $nameParts[0];
    $lastName = implode(" ", array_slice($nameParts, 1));
    return strtoupper($firstName) . " " . strtolower($lastName);
}
