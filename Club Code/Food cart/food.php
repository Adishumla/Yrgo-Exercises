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
while ($money > 0) {
    $randomFood = $food[array_rand($food)];
    if ($money >= $randomFood['price']) {
        $money -= $randomFood['price'];
        $cart .= $randomFood['name'] . ', ';
    }
    if ($money < $randomFood['price']) {
        unset($food[array_search($randomFood, $food)]);
    }
    if (count($food) == 0) {
        break;
    }
}
echo $cart . 'Total: ' . $money;
