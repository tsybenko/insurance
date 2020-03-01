<?php

namespace Insurance\Entities;

/**
 * Class Package
 * @package Insurance\Entities
 */
abstract class Package
{
    /**
     * @var Product
     */
    private $product;

    /**
     * @param Product $product
     */
    public function setProduct(Product $product)
    {
        $this->product = $product;
    }
}