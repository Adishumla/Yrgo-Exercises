<?php

$movie = [
    'title' => 'Inception',
    'director' => 'Christopher Nolan',
    'language' => 'English',
    'website' => 'https://www.themoviedb.org/movie/27205-inception',
    'budget' => 160000000,
    'quotes' => [
        'I bought the airline.',
        'Because, in my dreams we are together.',
        'You\'re waiting for a train. A train that\'ll take you far away.',
    ],
];
?>
<a href="<?php echo $movie['website']; ?>"><?php echo $movie['title'] ?> </a>