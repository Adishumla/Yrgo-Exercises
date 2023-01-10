<?php
if ($argc == 1) {
    echo "You should pass a .json file as a parameter (For example: 'php 02.php logbook.json')";
} else {
    var_dump($argv);
}
