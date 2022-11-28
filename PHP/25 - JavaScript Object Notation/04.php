<?php

declare(strict_types=1);
$file = file_get_contents('show.json');
header('Content-Type:JSON');
$decoded = json_decode($file, true);

echo $decoded['description'];
