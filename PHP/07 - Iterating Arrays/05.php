<?php

$movie = [
    'title' => 'Groundhog Day',
    'language' => 'English',
    'website' => 'https://www.themoviedb.org/movie/137-groundhog-day',
];
foreach ($movie as $key => $value) {
    echo ucwords($key . ': ' . $value . '<br>');
}
