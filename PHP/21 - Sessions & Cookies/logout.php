<?php
session_start();
$_SESSION['authenticated'] = false;
$_SESSION['message'] = 'logout successful';
header('Location: 05.php');
