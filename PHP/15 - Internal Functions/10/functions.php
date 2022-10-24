<?php

declare(strict_types=1);
//require __DIR__ . "index.php";
//function diffInYears, it accepts argument $timestamp, the function should return the difference in years in human readable format
function diffInYears(int $timestamp): string
{
    $now = time();
    $diff = $now - $timestamp;
    $years = floor($diff / (365 * 24 * 60 * 60));
    return $years . ' years ago';
}

echo diffInYears(1373500800) . "<br>" . PHP_EOL;
