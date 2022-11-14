<?php

session_start();

$_SESSION['actor'] = 'Leonardo DiCaprio';
$_SESSION['title'] = 'The Revenant';

echo $_SESSION['actor'] . ' won the Academy Award for Best Actor for his portrayal of Hugh Glass in the 2015 film ' . $_SESSION['title'] . '.';
