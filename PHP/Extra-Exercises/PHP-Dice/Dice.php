<?php
$lStege = array('1', '2', '3', '4', '5');
$sStege = array('2', '3', '4', '5', '6');
use function PHPSTORM_META\type;

for ($i = 1; $i < 6; $i++) {
    $dice[$i] = random_int(1, 6) . '<br>';
    echo $dice[$i];
}
$dice = array('6', '6', '6', '3', '3');
//$fHouse = array_count_values($dice);
$Dices = 
$fHouse = array('3', '2');
print_r($fHouse);
echo '<br><br>';
print_r($dice);
echo '<br>';
print_r($lStege);
echo '<br>';
 //$dice = array_sum($dice) . '<br>';
 //$dice = (int)$dice;
 if ( $dice == $lStege) {
     echo 'Liten stege';
 } elseif ($dice == $sStege) {
     echo 'Stor stege';
 } 
 elseif (array_count_values($dice) == $fHouse) {
     echo 'Kåk';
 }
 //else {
   //  echo 'You got ' . $dice;
 //}
