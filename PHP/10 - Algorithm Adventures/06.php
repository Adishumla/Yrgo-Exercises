<?php
$minutes = 151;

if ($minutes < 60) {
    echo "The movie is less than an hour long.";
} elseif ($minutes >= 60 && $minutes < 120) {
    echo "The movie is between 1 and 2 hours long.";
} elseif ($minutes > 120) {

    echo "The movie is over 2 hours long.";
}
