<?php

$dir =  'startrek.db';
$db = new PDO('sqlite:' . $dir);
$characters = $db->query('SELECT * FROM characters');

echo $characters->fetchColumn(1);
