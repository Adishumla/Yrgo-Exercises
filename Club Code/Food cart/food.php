<?php

//variables
$cart = '';
$money = 100;

$food = [ // array of food
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
while ($money > 0) { // while loop to keep the game going until the money is gone
    $randomFood = $food[array_rand($food)]; // random food from the array
    if ($money >= $randomFood['price']) { // if the money is greater than the price of the food
        $money -= $randomFood['price']; // subtract the price of the food from the money
        $cart .= $randomFood['name'] . ', '; // add the food to the cart
    }
    if ($money < $randomFood['price']) { // if money is less than the price of the random food, stop buying
        unset($food[array_search($randomFood, $food)]); // remove the food from the array
    }
    if (count($food) == 0) { // if there is no more food in the array, stop buying
        break;
    }
}
echo $cart . 'Total: ' . $money;
