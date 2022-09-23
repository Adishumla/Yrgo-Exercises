<?php

$characters = [
    'Ariadne',
    'Arthur',
    'Cobb',
    'Eames',
    'Robert',
    'Saito',
];

sort($characters); // Sorts the array alphabetically
rsort($characters); // Sorts the array in reverse alphabetical order
asort($characters); // Sorts the array by value
ksort($characters); // Sorts the array by key
arsort($characters); // Sorts the array by value in reverse order
krsort($characters); // Sorts the array by key in reverse order
array_multisort($characters); // Sorts the array by value, maintaining key associations
natcasesort($characters); // Sorts the array by value, using a "natural order" algorithm
natsort($characters); // Sorts the array by value, using a case-sensitive "natural order" algorithm
shuffle($characters); // Randomizes the order of the array's elements
uksort($characters, 'strnatcasecmp'); // Sorts the array by key, using a user-defined comparison function
usort($characters, 'strnatcasecmp'); // Sorts the array by value, using a user-defined comparison function
uasort($characters, 'strnatcasecmp'); // Sorts the array by value, using a user-defined comparison function
array_multisort($characters, SORT_DESC, SORT_STRING); // Sorts the array by value, maintaining key associations, in reverse order
print_r($characters);
