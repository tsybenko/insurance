<?php

namespace Insurance;

/**
 * Class ProductPrice
 * @package Insurance
 */
class ProductPrice
{
    /**
     * @var float
     */
    private $base;

    /**
     * @var float
     */
    private $discounted;

    /**
     * ProductPrice constructor.
     * @param $base
     * @param $discounted
     */
    public function __construct($base, $discounted)
    {
        $this->base = $base;
        $this->discounted = $discounted;
    }

    /**
     * @return float
     */
    public function getBase(): float
    {
        return $this->base;
    }

    /**
     * @return float
     */
    public function getDiscounted(): float
    {
        return $this->discounted;
    }
}