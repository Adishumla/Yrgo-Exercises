<?php

declare(strict_types=1);

namespace App\Webshop;

use App\Webshop\Product;

abstract class ProductContainer
{

    protected array $products;

    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }

    public function getProducts(): array
    {
        return $this->products;
    }
}
