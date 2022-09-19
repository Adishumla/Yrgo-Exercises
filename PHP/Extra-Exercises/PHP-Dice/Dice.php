<?php
$fHouse = array('3', '2');
use function PHPSTORM_META\type;

for ($i = 1; $i < 6; $i++) {
    $dice[$i] = random_int(1, 6) . '<br>';
    echo $dice[$i];
}
// specify dice values for testing
//$dice = array('2', '4', '4', '4', '4');
 if ( $dice == array('1','2','3','4','5')){
     echo 'Liten stege';
 } elseif ($dice == array('2', '3', '4', '5', '6')) {
     echo 'Stor stege';
 } elseif (array_values(array_count_values($dice)) == $fHouse || array_values(array_count_values($dice)) == array_reverse($fHouse)) {
     echo 'Kåk';
 }
 else if (array_values(array_count_values($dice)) == array('5', '1')) {
     echo 'Yatzy';
 }
 else if (array_values(array_count_values($dice)) == array('4', '1')) {
     echo 'Fyrtal';
 }
 else if (array_values(array_count_values($dice)) == array('3', '2')) {
     echo 'Triss';
 }
 else if (array_values(array_count_values($dice)) == array('3', '1', '1')) {
     echo 'Två par';
 }
 else if (array_values(array_count_values($dice)) == array('2', '2', '1')) {
     echo 'Ett par';
 }

 else {
    echo 'You got ' .array_sum($dice);
 }
