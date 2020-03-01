<?php

namespace Insurance;

use Insurance\Entities\Product;

/**
 * Class ProductFactory
 * @package Insurance
 */
class ProductFactory
{
    /**
     * @var array
     */
    private static $map = [
        'travel' => Travel::class
    ];

    /**
     * @param string $id
     * @return bool
     */
    public static function isExists(string $id): bool
    {
        return key_exists($id, static::$map);
    }

    /**
     * @param string $id
     * @return Product
     */
    public static function getById(string $id): Product
    {
        return new static::$map[$id];
    }
}