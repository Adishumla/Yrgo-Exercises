<?php

if ($argc == 1) {
    echo "You should pass a .json file as a parameter (For example: 'php 03.php logbook.json')";
}
if (isset($argv[1]) && preg_match('/\.json$/', $argv[1])) {
    var_dump($argv);
}
