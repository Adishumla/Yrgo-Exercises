<?php

declare(strict_types=1);

$cells = ['C201', 'B302', 'D404', 'A500', 'B418'];

$cell = shuffle($cells);

for ($i = 0; $i < 1; $i++) {
    echo "Piper Chapman, you'll be in cell " . $cells[$i] . "!" . PHP_EOL;
}
