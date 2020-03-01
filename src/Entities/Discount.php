<?php

namespace Insurance\Entities;

class Discount
{
    const DEFAULT_VALUE = 0;

    private $value;

    public function __construct($value)
    {
        $this->setValue($value);
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

    public static function getByPromo($promo): self
    {
        if (empty($promo)) return new self(self::DEFAULT_VALUE);

        $v = (rand(1, 4)) / 10;

        return new self($v);
    }
}