<?php

//variables
$cart = '';
$money = 100;

$food = [
    [
        'name' => 'lettuce',
        'price' => 13,
    ],
    [
        'name' => 'tomato',
        'price' => 10,
    ],
    [
        'name' => 'onion',
        'price' => 5,
    ],
    [
        'name' => 'cheese',
        'price' => 20,
    ],
    [
        'name' => 'bread',
        'price' => 15,
    ],
    [
        'name' => 'bacon',
        'price' => 25,
    ],
    [
        'name' => 'egg',
        'price' => 10,
    ],
    [
        'name' => 'mayo',
        'price' => 5,
    ],
    [
        'name' => 'mustard',
        'price' => 5,
    ],
    [
        'name' => 'ketchup',
        'price' => 5,
    ],
    [
        'name' => 'pickle',
        'price' => 5,
    ],

];

// shop food until you run out of money and money cant be negative
while ($money > 0) {
    // pick a random food item
    $foodItem = $food[rand(0, count($food) - 1)];
    //check if you have enough money to buy the food item
    if ($money >= $foodItem['price']) {
        // add the food item to the cart
        $cart .= $foodItem['name'] . ', ';
        // subtract the price of the food item from your money
        $money -= $foodItem['price'];
    }
}
echo $cart . 'Total: ' . $money;
