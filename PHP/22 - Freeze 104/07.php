<?php


if (file_exists('quotes.txt')) {
    $quotes = file_get_contents('quotes.txt');
    $quotes = explode(PHP_EOL, $quotes);
    array_pop($quotes);
    $quotes = array_filter($quotes, 'strlen');
    $number_of_quotes = count($quotes);
    $number = random_int(1, $number_of_quotes);
    echo $quotes[$number];
    echo '<br>';
    echo 'quote: ' . $number;
    echo '<br>';
    echo 'number of quotes: ' . $number_of_quotes;
}
