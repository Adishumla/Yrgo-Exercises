<?php

function greet($firstName, $lastName)
{
    echo "Hello, $firstName $lastName!";
}
$greeting = greet('Ace', 'Ventura');
echo $greeting; // Hey, Ace Ventura!