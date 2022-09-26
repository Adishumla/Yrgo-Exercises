<?php
$cards = ['ace of diamond', 'ace of heart', 'ace of spade', 'ace of club', 'two of diamond', 'two of heart', 'two of spade', 'two of club', 'three of diamond', 'three of heart', 'three of spade', 'three of club', 'four of diamond', 'four of heart', 'four of spade', 'four of club', 'five of diamond', 'five of heart', 'five of spade', 'five of club', 'six of diamond', 'six of heart', 'six of spade', 'six of club', 'seven of diamond', 'seven of heart', 'seven of spade', 'seven of club', 'eight of diamond', 'eight of heart', 'eight of spade', 'eight of club', 'nine of diamond', 'nine of heart', 'nine of spade', 'nine of club', 'ten of diamond', 'ten of heart', 'ten of spade', 'ten of club', 'jack of diamond', 'jack of heart', 'jack of spade', 'jack of club', 'queen of diamond', 'queen of heart', 'queen of spade', 'queen of club', 'king of diamond', 'king of heart', 'king of spade', 'king of club'];
// function that shuffles the deck of cards
function shuffleDeck($cards)
{
    shuffle($cards);
    return $cards;
}
// function that deals a poker hand of five cards
function dealHand($cards)
{
    $hand = [];
    for ($i = 0; $i < 5; $i++) {
        $hand[] = $cards[$i];
    }
    return $hand;
}
// function that displays a poker hand
function displayHand($hand)
{
    foreach ($hand as $card) {
        echo "<p>$card</p>";
    }
}
// run the functions
$cards = shuffleDeck($cards);
$hand = dealHand($cards);
echo displayHand($hand);
