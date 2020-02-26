<?php

namespace Insurance\Strategies;

use Insurance\Discount;
use Insurance\Product;
use Insurance\ProductPrice;

class BaseStrategy implements CalculatorStrategy
{
    protected $product;
    protected $discount;

    public function __construct(Product $product, Discount $discount)
    {
        $this->product = $product;
        $this->discount = $discount;
    }

    public function getProduct()
    {
        return $this->product;
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    public function calculate(): ProductPrice
    {
        $basePrice = $this->getProduct()->getPrice();
        $discount = $this->getDiscount()->getValue();

        return new ProductPrice(
            $basePrice,
            $basePrice - ($basePrice * $discount)
        );
    }
}