<?php
$name = 'Dominic West';
$yearOfBirth = 1969;
$currentYear = date('Y');
$age = $currentYear - $yearOfBirth;
if ($age > 18) {
    echo $name . ' is old enough to drive';
} else {
    echo $name . ' is not old enough to drive.';
}
