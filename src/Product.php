<?php

namespace Insurance;

use Insurance\Strategies\CalculatorStrategy;

abstract class Product
{
    abstract protected function getPackages(): array;

    public function getPackage(string $id): CalculatorStrategy
    {
        $packages = $this->getPackages();

        /** @var Package $package */
        $package = new $packages[$id];
        $package->setProduct($this);

        return new $package;
    }
}