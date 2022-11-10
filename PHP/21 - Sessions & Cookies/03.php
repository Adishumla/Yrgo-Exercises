<?php
$value = 'Silicon Valley';
setcookie($name = 'title', $value, time() + 3600);

if (isset($_COOKIE['title'])) {
    echo $_COOKIE['title'];
}
