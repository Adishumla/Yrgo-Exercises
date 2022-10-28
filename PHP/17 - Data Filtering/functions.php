<?php

function sanitizeName(string $name): string
{
    return strtolower(filter_var($name, FILTER_UNSAFE_RAW));
}


/* if (isset($_POST['first_name'], $_POST['last_name'])) {
    if (filter_var($_POST['first_name'], FILTER_UNSAFE_RAW) && filter_var($_POST['last_name'], FILTER_UNSAFE_RAW)) {
        $email = $_POST['first_name'] . '.' . $_POST['last_name'] . '@facebook.com';
        $email = strtolower($email);
    }
}
 */