<?php

namespace Insurance;

use Insurance\Strategies\CalculatorStrategy;

final class Calculator
{
	private $strategy;

	public function __construct(CalculatorStrategy $strategy)
	{
		$this->setStrategy($strategy);
	}

	public function setStrategy(CalculatorStrategy $strategy)
	{
		return $this->strategy = $strategy;
	}

	public function calculate(): ProductPrice
	{
		$strategy = $this->strategy;
		return $strategy->calculate();
	}
}