<?php

namespace Insurance;

use Insurance\Entities\Product;
use Insurance\Strategies\Touring;

/**
 * Class Travel
 * @package Insurance
 */
class Travel extends Product
{

    /**
     * @return array
     */
    protected function getPackages(): array
    {
        return [
            'touring' => Touring::class
        ];
    }
}