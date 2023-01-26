<?php

declare(strict_types=1);

namespace App\Webshop;

use App\Webshop\Product;
use App\Webshop\ProductContainer;

class Cart extends ProductContainer
{

    public function getTotalPrice(): float
    {
        return array_reduce($this->products, function ($carry, $product) {
            return $carry + $product->price;
        }, 0);
    }

    public function removeProduct(Product $product)
    {
        $removed = false;
        $products = $this->products;
        $this->products = [];
        foreach ($products as $p) {
            if ($p->name === $product->name && !$removed) {
                $removed = true;
                $p->inventoryBalance++;
            } else {
                $this->products[] = $p;
            }
        }

        return $this->products;
    }




    public function reset()
    {

        foreach ($this->products as $product) {
            $product->inventoryBalance++;
        }

        $this->products = [];
    }

    public function getProducts(): array
    {
        return $this->products;
    }

    public function addProduct(Product $product)
    {
        if ($product->inventoryBalance > 0) {
            $this->products[] = $product;
            $product->inventoryBalance--;
        }
    }
}
