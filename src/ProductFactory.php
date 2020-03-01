<?php

namespace Insurance;

class ProductFactory
{
    private static $map = [
        'travel' => Travel::class
    ];

    public static function isExists(string $id)
    {
        return key_exists($id, static::$map);
    }

    public static function getById(string $id): Product
    {
        return new static::$map[$id];
    }
}