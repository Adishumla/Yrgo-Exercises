<?php
include_once "actors.php";

foreach ($actors as $actor) {
    echo '<a href="' .
        $actor["tmdb_url"] .
        '">' .
        $actor["name"] .
        "</a> - " .
        $actor["character"] .
        "<br>";
}
