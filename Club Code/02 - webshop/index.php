<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Webshop\Product;


$cart = new App\Webshop\Cart();
$store = new App\Webshop\Store();

//array of products in the store
$store->addProduct(new Product('food', 'apple', 1, 10));
$store->addProduct(new Product('food', 'banana', 2, 10));
$store->addProduct(new Product('food', 'orange', 3, 10));
$store->addProduct(new Product('food', 'pear', 4, 10));
$store->addProduct(new Product('food', 'grape', 5, 10));
$store->addProduct(new Product('food', 'pineapple', 6, 10));

// add products to cart
$cart->addProduct($store->getProducts()[0]);
$cart->addProduct($store->getProducts()[3]);
$cart->addProduct($store->getProducts()[0]);
$cart->addProduct($store->getProducts()[0]);
$cart->addProduct($store->getProducts()[0]);
$cart->addProduct($store->getProducts()[2]);

// print cart total price, products in cart, and balance of product in store
echo 'Cart total price: ' . $cart->getTotalPrice() . PHP_EOL;
echo "<br>";
echo 'Cart products: ' . PHP_EOL;
foreach ($cart->getProducts() as $product) {
    echo $product->name . PHP_EOL;
}
echo "<br>";
echo 'Balance of product in store: ' . $store->getProducts()[0]->inventoryBalance . PHP_EOL;
echo "<br>";

// remove product from cart
$cart->removeProduct($store->getProducts()[0]);
//$cart->removeProduct($store->getProducts()[0]);

// print cart total price, products in cart, and balance of product in store after removing product
echo 'Cart total price: ' . $cart->getTotalPrice() . PHP_EOL;
echo "<br>";
echo 'Cart products: ' . PHP_EOL;
foreach ($cart->getProducts() as $product) {
    echo $product->name . "," . PHP_EOL;
}
echo "<br>";
echo 'Balance of product in store: ' . $store->getProducts()[0]->inventoryBalance . PHP_EOL;
echo "<br>";

// reset cart
$cart->reset();

// print cart total price, products in cart, and balance of product in store after resetting cart
echo 'Cart total price: ' . $cart->getTotalPrice() . PHP_EOL;
echo "<br>";
echo 'Cart products: ' . PHP_EOL;
foreach ($cart->getProducts() as $product) {
    echo $product->name . PHP_EOL;
}
echo "<br>";
echo 'Balance of product in store: ' . $store->getProducts()[0]->inventoryBalance . PHP_EOL;
