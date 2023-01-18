<?php

require __DIR__ . "/src/Article.php";
require __DIR__ . "/src/Author.php";
require __DIR__ . "/src/support/Str.php";

use App\Article;
use App\Author;


$author = new Author("Mando");
$article1 = new Article("Staying Connected While Abroad", "With all the stress that goes into booking flights and lodging, packing (and not forgetting) everything you'll need, finding pet sitters, and everything else that goes with a trip overseas, there's the added stress of staying connected while abroad.", "2020-03-24", $author, "staying-connected-while-abroad");
$article2 = new Article("How to Find the Best Travel Deals", "Traveling is one of the most rewarding experiences you can have, but it can also be one of the most expensive. If you're looking to save money on your next trip, here are some tips on how to find the best travel deals.", "2020-10-14", $author, "how-to-find-the-best-travel-deals");

echo "<section>";
echo "<h2>" . $article1->title . "</h2>";
echo "<article><p>" . $article1->getExcerpt(15) . "</p></article>";
echo "Written by " . $article1->author->name . " on " . $article1->date . ".";
echo "<p></p><a href='article.php?slug=" . $article1->slug . "'>Continue reading →</a></p>";
echo "</section>";

echo "<section>";
echo "<h2>" . $article2->title . "</h2>";
echo "<article><p>" . $article2->getExcerpt(15) . "</p></article>";
echo "Written by " . $article2->author->name . " on " . $article2->date . ".";
echo "<p></p><a href='article.php?slug=" . $article2->slug . "'>Continue reading →</a></p>";
echo "</section>";
