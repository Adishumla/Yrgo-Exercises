<?php

$hasParent = true;
$age = 17;

// TODO: Implement the if statement logic.
if ($hasParent == true && $age < 18) {
    echo "You can go ahead and watch The Square with your parents.";
} elseif ($hasParent == false && $age < 18) {
    echo "Sorry. You're not allowed to watch The Square without your parents.";
} elseif ($age >= 18) {
    echo "Welcome to the movie theatres, you're a grown-up!";
}
