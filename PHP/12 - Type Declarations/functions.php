<?php

declare(strict_types=1);

function sayHelloTo()
{
    return 'Hello, ' . func_get_arg(0) . '!';
}

function getMovieDescription()
{
    $title = func_get_arg(0);
    $director = func_get_arg(1);
    $year = func_get_arg(2);

    return "The movie $title was released $year and directed by $director.";
}

function getFirstChar()
{
    return substr(func_get_arg(0), 0, 1);
}

function getStringsLength()
{
    $lengths = [];
    foreach (func_get_arg(0) as $string) {
        $lengths[] = strlen($string);
    }
    return $lengths;
}

function getBlock()
{
    $blocks = [
        'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAAFUlEQVR4AWPI7vlPEhrGGkY1jGoAAEwQ9hBqU6EFAAAAAElFTkSuQmCC',
        'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQAgMAAABinRfyAAAACVBMVEXnWhD31rUAAABagmvSAAAANklEQVR4AWMQDU0MYXBgUGFCIdRAhNIKIKEahi67gGECE0MUiHBd5QAUCwMRTA5cDForslYAAKVzDEjCrcCGAAAAAElFTkSuQmCC',
        'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAALElEQVR4AWP4fm0rSYjheZQAJmJgwClOogZyAH5TMcXpoIFUQJtgHY0HUgEAQR/y28nnCdAAAAAASUVORK5CYII=',
        'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQAgMAAABinRfyAAAADFBMVEVrjP/nWhD/pUIAAABg5DuiAAAAQElEQVR4AWMQDQ0NYchatWo1Q96qVbsZsqZGrWbIir8GJOKmw4h94UBiZT2IqAISq36BWFlgLkjbr90QA/4DAQBLbyVGZjjebAAAAABJRU5ErkJggg==',
    ];

    // TODO: Implement function exercise 5 with type declarations.
    return $blocks[func_get_arg(0)];
}

function getQuote()
{
    $quotes = [
        'Different things can be sad... it\'s not all war!',
        'I want you to be the very best version of yourself that you can be.',
        'People go by the names their parents give them, but they don\'t believe in God.',
        'Some people aren\'t built happy, you know.',
        'The only thing exciting about 2002 is that it\'s a palindrome.',
    ];
    // accept quote number as an integer argument return a quote by the given number in the $quotes array, if the number is not valid echo an error message
    foreach ($quotes as $key => $quote) {
        if ($key == func_get_arg(0)) {
            return $quote;
        }
        if ($key == count($quotes) - 1) {
            echo 'Error: quote number ' . func_get_arg(0) . ' does not exist.';
        }
    }
}

function getRandomQuote()
{
    $quotes = [
        'Different things can be sad... it\'s not all war!',
        'I want you to be the very best version of yourself that you can be.',
        'People go by the names their parents give them, but they don\'t believe in God.',
        'Some people aren\'t built happy, you know.',
        'The only thing exciting about 2002 is that it\'s a palindrome.',
    ];

    // TODO: Implement function exercise 7 with type declarations.
    return $quotes[array_rand($quotes)];
}

function getMap()
{
    // TODO: Implement function exercise 8 with type declarations.
    $width = func_get_arg(0);
    $height = func_get_arg(1);
    $map = [];
    for ($i = 0; $i < $height; $i++) {
        for ($j = 0; $j < $width; $j++) {
            if ($i < $height - 1) {
                $map[$i][$j] = 0;
            } else {
                $map[$i][$j] = 1;
            }
        }
    }
    return $map;
}
