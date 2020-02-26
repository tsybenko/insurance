<?php

namespace Insurance\Strategies;

use Insurance\ProductPrice;

class PropertyStrategy extends BaseStrategy
{
    public function calculate(): ProductPrice
    {
        $basePrice = $this->getProduct()->getPrice();
        $discount = $this->getDiscount()->getValue();

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