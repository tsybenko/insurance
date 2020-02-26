<?php

namespace Insurance;

class Discount
{
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
		if (empty($promo)) return new self(0);

		$v = (rand(10, 100)) / 10;

		return new self($v);
	}
}