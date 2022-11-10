<?php
session_start();
// TODO: Implement the login logic here.
$_SESSION['message'] = '';
$user = [
    'name' => 'Bertram Gilfoyle',
    'email' => 'gilfoyle@piedpiper.io',
    'password' => '$2y$10$Qx.ZsPJooxIqFDewbA9wS.fY6Nkp5qkmJynqkbwxmEyX5Q9Er5EBW',
];
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    if ($_POST['email'] === $user['email'] && password_verify($_POST['password'], $user['password'])) {
        $_SESSION['authenticated'] = true;
        $_SESSION['message'] = 'login successful';
        echo 'Welcome back, ' . $user['name'];
        header('Location: 05.php');
    } else {
        echo 'Invalid credentials';
        $_SESSION['message'] = 'login unsuccessful';
        header('Location: 05.php');
    }
}
