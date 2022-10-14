<?php

declare(strict_types=1);

require __DIR__ . '/functions.php';

$map = getMap(20, 4);

// TODO: Implement the map loops.
foreach ($map as $row) {
    foreach ($row as $block) {
        echo '<img src="' . getBlock($block) . '" alt="block" />';
    }
    echo '<br>';
}
