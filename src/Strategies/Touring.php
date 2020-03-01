<?php

namespace Insurance\Strategies;

use Insurance\Entities\Package;
use Insurance\ProductPrice;

class Touring extends Package implements CalculatorStrategy
{
    public function getBasePrice() {
        return 220.0;
    }

    public function calculate(array $data): ProductPrice
    {
        $price = 0;
        $basePrice = $this->getBasePrice();

        foreach ($data['customers'] as $customer) {
            $price += $basePrice;
        }

        return new ProductPrice($price, $price - ($price * 0.05));
    }
}