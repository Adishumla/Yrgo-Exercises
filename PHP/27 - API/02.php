<?php

declare(strict_types=1);

header('Content-Type:application/json');

$horses = json_decode(file_get_contents(__DIR__ . '/horses.json'));

if (isset($_GET['id'])) {

    $id = htmlspecialchars($_GET['id'], ENT_QUOTES);

    $selectedHorse = array_filter($horses->horses, function ($horse) use ($id) {
        return $horse->id === $id;
    });

    echo json_encode($selectedHorse);
} else {
    /* Show all horses if request query doesn't contain id */
    echo json_encode($horses);
}
