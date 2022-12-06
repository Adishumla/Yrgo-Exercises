<?php

declare(strict_types=1);

if (isset($_POST['name'], $_POST['actor'])) {
    // TODO: Implement the add new vampire logic.
    $vampires = json_decode(file_get_contents(__DIR__ . '/vampires.json'), true);


    foreach ($vampires as $vampire) {
        if ($vampire['name'] === $_POST['name']) {
            header('Content-Type: application/json');
            http_response_code(400);
            echo json_encode(['error' => 'Vampire already exists']);
            exit;
        }
    }

    $vampires[] = [
        'name' => filter_var($_POST['name'], FILTER_UNSAFE_RAW),
        'actor' => filter_var($_POST['actor'], FILTER_UNSAFE_RAW),
    ];

    file_put_contents(__DIR__ . '/vampires.json', json_encode($vampires));

    header('Content-Type: application/json');
    echo file_get_contents(__DIR__ . '/vampires.json');

    exit;
}
