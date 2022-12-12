<?php

declare(strict_types=1);

use GuzzleHttp\Client;

require_once __DIR__ . '/../hotel/vendor/autoload.php'; // or use __DIR__ . '/vendor/autoload.php' if you are in the same folder as vendor
require_once __DIR__ . '/../vendor/autoload.php'; // guzzle is in the root folder

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../hotel'); // --> ../hotel is where vendor is located
$dotenv->load();

$client = new Client([
    'url' => 'https://www.yrgopelago.se/test/index.php',
]);
$res = $client->request('POST', 'https://www.yrgopelago.se/test/index.php', [
    'form_params' => [
        'startCode' => 'bad0ecb0-399d-48d8-88ee-15ac509e19e4'
    ],
]);

echo $res->getStatusCode();
echo '<br>';


if ($res->getStatusCode() === 200) {
    $data = json_decode($res->getBody()->getContents());
    file_put_contents(__DIR__ . '/.env', 'API_KEY=' . $data->password);
}
