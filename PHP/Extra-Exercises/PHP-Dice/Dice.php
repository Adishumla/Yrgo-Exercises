<?php
use function PHPSTORM_META\type;

for ($i = 1; $i < 6; $i++) {
    // creates 5, 6 sided dices in an array, each with a random number between 1 and 6
    $dice[$i] = random_int(1, 6) . "<br>";
    echo $dice[$i];
}
// specify dice values for testing
//$dice = array('2', '4', '4', '4', '4');
if ($dice == ["1", "2", "3", "4", "5"]) {
    // if dice values are 1,2,3,4,5
    echo "Liten stege";
} elseif ($dice == ["2", "3", "4", "5", "6"]) {
    // if dice values are 2,3,4,5,6
    echo "Stor stege";
} elseif (
    array_values(array_count_values($dice)) == ["3", "2"] ||
    array_values(array_count_values($dice)) == ["2", "3"]
) {
    // if dice values are 3 of a kind and 2 of a kind
    echo "Kåk";
} elseif (array_values(array_count_values($dice)) == ["5", "1"]) {
    // if dice values are 5 of a kind
    echo "Yatzy";
} elseif (array_values(array_count_values($dice)) == ["4", "1"]) {
    // if dice values are 4 of a kind
    echo "Fyrtal";
} elseif (array_values(array_count_values($dice)) == ["3", "2"]) {
    // if dice values are 3 of a kind
    echo "Triss";
} elseif (array_values(array_count_values($dice)) == ["3", "1", "1"]) {
    // if dice values are 3 of a kind and 2 single values
    echo "Två par";
} elseif (array_values(array_count_values($dice)) == ["2", "2", "1"]) {
    // if dice values are 2 of a kind and 2 single values
    echo "Ett par";
} else {
    // if none of the above
    echo "You got " . array_sum($dice);
}
// array_count_values() counts the number of times each value occurs in an array and array_values()
// returns all the values from the array and indexes the array numerically
// this returns an array with the value [0] => 3 and [1] => 2 if there are 3 of a kind and 2 of a kind
