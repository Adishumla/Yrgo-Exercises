<?php

declare(strict_types=1);

namespace App\Webshop;

class Product
{

    public function __construct(
        public string $category,
        public string $name,
        public int $price,
        public int $inventoryBalance = 0
    ) {
    }
}
