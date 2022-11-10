<?php
session_start();

$_SESSION['counter'] += 1;

echo 'The counter is: ' . $_SESSION['counter'];
