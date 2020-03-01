<?php

namespace Insurance;

final class Calculator
{
    private $product;
    private $package;

    public function __construct(string $product_id, string $package_id)
    {
        $this->product = ProductFactory::getById($product_id);
        $this->package = $this->product->getPackage($package_id);
    }

    public static function make(string $product_id, string $package_id): self
    {
        return new self($product_id, $package_id);
    }

    public function calculate(array $data): ProductPrice
    {
        return $this->package->calculate($data);
    }
}