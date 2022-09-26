<?php
for ($i = 0; $i < 3; $i++) {
    // creates 3, 6 sided dices in an array, each with a random number between 1 and 6
    $dice[$i] = random_int(1, 6) . "<br>";
    echo $dice[$i];
}
// specify dice values for testing
//$dice = array('1', '2', '3');
if (array_sum($dice) >= 14) { // if the sum of the dice is greater than or equal to 14
    echo "1 Point!";
}
if (array_values(array_count_values($dice)) == [3]) { // if there are 3 of a kind
    // if dice values are 3 of a kind
    echo "2 Points!";
}
foreach ($dice as $straight) { // loop through the dice array
    if ($dice == ($dice[$i - 1] + 1)) { // if the dice value is 1 greater than the previous dice value
        $straight++; // add 1 to the straight variable
    }
}
if ($straight == 3) { // if the straight variable is equal to 3
    echo "3 Points!";
}
