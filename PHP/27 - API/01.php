<?php

declare(strict_types=1);

header('Content-Type: application/json');

$horses = file_get_contents(__DIR__ . '/horses.json');

// When you got your data as json, there's no need to encode it.
echo $horses;
