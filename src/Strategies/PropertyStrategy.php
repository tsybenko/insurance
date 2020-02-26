<?php

namespace Insurance\Strategies;

use Insurance\ProductPrice;

class PropertyStrategy extends CalculatorStrategy
{
    public function calculate(): ProductPrice
    {
        $basePrice = 23.3;
        $discount = $this->getDiscount();

        if ($discount > 0) {
            return new ProductPrice(
                $basePrice,
                $basePrice - ($basePrice * $discount)
            );
        }

        return new ProductPrice(
            $basePrice,
            parent::getDiscount()
        );
    }
}