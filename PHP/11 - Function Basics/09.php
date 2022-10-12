<?php
function getRandomEmoji($emojis)
{
    array_rand($emojis);
    return $emojis[array_rand($emojis)];
}

$emojis = [
    'joy' => '😂',
    'rage' => '😡',
    'scream' => '😱',
    'shit' => '💩',
    'smirk' => '😏',
    'sunglasses' => '😎',
    'thumbsdown' => '👎',
    'thumbsup' => '👍',
    'unicorn' => '🦄',
];
echo getRandomEmoji($emojis);
