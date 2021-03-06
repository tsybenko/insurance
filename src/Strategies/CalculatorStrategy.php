<?php

namespace Insurance\Strategies;

use Insurance\ProductPrice;

interface CalculatorStrategy
{
    public function calculate(array $data): ProductPrice;
}