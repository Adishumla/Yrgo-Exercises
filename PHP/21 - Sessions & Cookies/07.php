<?php
setcookie(
    'count',
    $counter = isset($_COOKIE['count']) ? $_COOKIE['count'] + 1 : 1,
    $expire = time() + 3600
);

echo 'The counter is: ' . $_COOKIE['count'];
