<?php

$characters = [
    [
        'name' => 'Larry',
        'quotes' => [
            'Did he actually refer to himself as "the talent"?',
        ],
    ],
    [
        'name' => 'Phil Connors',
        'quotes' => [
            'Do you want to throw up here or in the car?',
            'I\'m not going to live by their rules anymore.',
            'It\'s just still once a year, isn\'t it?',
        ],
    ],
    [
        'name' => 'Rita',
        'quotes' => [
            'Well, first of all, he\'s too humble to know he\'s perfect.',
            'Why would anyone wanna steal a Groundhog?',
        ],
    ],
];
?>
<?php foreach ($characters as $character) : ?>
    <h2><?= $character['name'] ?></h2>
    <l>
        <?php foreach ($character['quotes'] as $quote) : ?>
            <li><?= $quote ?></li>
        <?php endforeach; ?>
    </l>
<?php endforeach; ?>