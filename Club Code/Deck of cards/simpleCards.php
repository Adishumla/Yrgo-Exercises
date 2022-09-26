<?php
$cards = [
    'suit' => ['hearts', 'diamonds', 'clubs', 'spades'],
    'value' => ['ace', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'jack', 'queen', 'king']
];
// shuffle the deck of cards function
function shuffleDeck($cards)
{
    $deck = [];
    foreach ($cards['suit'] as $suit) {
        foreach ($cards['value'] as $value) {
            $deck[] = ['suit' => $suit, 'value' => $value];
        }
    }
    shuffle($deck);
    return $deck;
}
// deal a hand of five cards function
function dealHand($deck)
{
    $hand = [];
    for ($i = 0; $i < 5; $i++) {
        $hand[] = array_pop($deck);
    }
    return $hand;
}
// display a hand of five cards as text function
function displayHand($hand)
{
    foreach ($hand as $card) {
        echo "{$card['value']} of {$card['suit']}<br>";
    }
}
//run the functions
$deck = shuffleDeck($cards);
$hand = dealHand($deck);
echo displayHand($hand);
