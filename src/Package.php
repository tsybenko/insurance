<?php

namespace Insurance;

abstract class Package
{
    private $product;

    public function setProduct(Product $product)
    {
        $this->product = $product;
    }
}