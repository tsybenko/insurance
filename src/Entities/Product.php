<?php

namespace Insurance\Entities;

use Insurance\Strategies\CalculatorStrategy;

/**
 * Class Product
 * @package Insurance\Entities
 */
abstract class Product
{

    /**
     * @return array
     */
    abstract protected function getPackages(): array;

    /**
     * @param string $id
     * @return CalculatorStrategy
     */
    public function getPackage(string $id): CalculatorStrategy
    {
        $packages = $this->getPackages();

        /** @var Package $package */
        $package = new $packages[$id];
        $package->setProduct($this);

        return new $package;
    }
}