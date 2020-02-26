<?php

namespace Insurance\Strategies;

use Insurance\ProductPrice;

class TravelStrategy extends CalculatorStrategy
{
	public function calculate(): ProductPrice
	{
		$base = 2.1;

		return new ProductPrice(
			$base, parent::getDiscount()
		);
	}
}