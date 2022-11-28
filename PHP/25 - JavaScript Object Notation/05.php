<?php

declare(strict_types=1);

$file = file_get_contents('girls.json');
echo '<ul>';
$actors = json_decode($file);
foreach ($actors->actors as $key => $actor) {
    echo '<li>the character ' . $actor->character . ' is portrayed by ' . $actor->name . '</li>';
}
echo '</ul>';
