<?php

function searchEmojis(string $query)
{
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
    $found = [];
    foreach ($emojis as $key => $value) {
        if (str_contains($key, $query)) {
            array_push($found, $value);
        }
    }
    return $found;
}

print_r(searchEmojis('thumb')); // Array ( [0] => 👎 [1] => 👍 )