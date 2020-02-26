<?php

namespace Insurance\Strategies;

use Insurance\Discount;
use Insurance\ProductPrice;

abstract class CalculatorStrategy
{
	protected $discount;

	public function __construct(Discount $discount)
	{
		$this->discount = $discount->getValue();
	}

	public function getDiscount()
	{
		return $this->discount;
	}

	abstract public function calculate(): ProductPrice;
}