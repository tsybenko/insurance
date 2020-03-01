<?php

namespace Insurance;

/**
 * Class Calculator
 * @package Insurance
 */
final class Calculator
{
    /**
     * @var Entities\Product
     */
    private $product;

    /**
     * @var Strategies\CalculatorStrategy
     */
    private $package;


    /**
     * Calculator constructor.
     * @param string $product_id
     * @param string $package_id
     */
    public function __construct(string $product_id, string $package_id)
    {
        $this->product = ProductFactory::getById($product_id);
        $this->package = $this->product->getPackage($package_id);
    }

    /**
     * @param string $product_id
     * @param string $package_id
     * @return static
     */
    public static function make(string $product_id, string $package_id): self
    {
        return new self($product_id, $package_id);
    }

    /**
     * @param array $data
     * @return ProductPrice
     */
    public function calculate(array $data): ProductPrice
    {
        return $this->package->calculate($data);
    }
}