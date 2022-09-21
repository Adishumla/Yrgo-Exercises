<?php
$name = 'Alicia Vikander';
$yearOfBirth = 1988;
$currentYear = date('Y');

echo $name . ' was born in ' . $yearOfBirth . ' and is ' . ($currentYear - $yearOfBirth) . ' years old.';
