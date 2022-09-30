<?php

$characters = [
    'Allison Reynolds',
    'Andrew "Andy" Clark',
    'Brian Ralph Johnson',
    'Claire Standish',
    'John Bender',
];

while ($character = array_shift($characters)) {
    echo $character . '<br>';
}
