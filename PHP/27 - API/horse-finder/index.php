<?php

declare(strict_types=1);

/* Vendor autoload is often required when using Composer to handle external PHP tools and programs */
require 'vendor/autoload.php';

/* Use tells php what classes and objects to use. Don't be afraid if VS Code marks them with RED underline, they will work anyway. */

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

/* Start by creating a new client */

$client = new Client();

/* When working with data from other sources, it can be convenient to put your code in a try/catch-block, because if something bad happens, it can be caught in the catch-section and handled there. */
try {
    $response = $client->get('https://localhost:8007/02.php');
} catch (ClientException $e) {
    echo $e->getMessage();
}

/* If we got some response, we will create a variable and put all the decoded content in there. */
if ($response->getBody()) {
    $horses = json_decode($response->getBody()->getContents());

    // Then we can use the data in what way we want.
    foreach ($horses->horses as $horse) {
        echo $horse->name . "<p>";
    }
}
