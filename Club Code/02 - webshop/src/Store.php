<?php

declare(strict_types=1);

namespace App\Webshop;

use App\Webshop\Product;
use App\Webshop\ProductContainer;

class Store extends ProductContainer
{

    public function removeProduct(Product $product)
    {
        $products = $this->products;
        $this->products = [];
        foreach ($products as $p) {
            if ($p->name !== $product->name) {
                $this->products[] = $p;
            }
        }

        return $this->products;
    }
}
