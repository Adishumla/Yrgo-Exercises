<?php
// every hand should have 5 cards

$cards = [
    'suit' => ['hearts', 'diamonds', 'clubs', 'spades'],
    'value' => ['ace', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'jack', 'queen', 'king']
];
// function sort the cards randomly 
function shuffleCards($cards)
{
    $randomSuit = $cards['suit'][array_rand($cards['suit'])];
    $randomValue = $cards['value'][array_rand($cards['value'])];
    return $randomSuit . ' ' . $randomValue;
}

// function deal 5 cards
// if hand has 5 cards, stop dealing
function dealCards($cards)
{
    $hand = [];
    while (count($hand) < 5) {
        $hand[] = shuffleCards($cards);
    }
    return $hand;
}

echo 'Your hand is: ' . implode(', ', dealCards($cards));
// function deal 5 cards dynamically
