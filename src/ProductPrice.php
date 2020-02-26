<?php

namespace Insurance;

class ProductPrice
{
	private $base;
	private $discounted;

	public function __construct($base, $discounted)
	{
		$this->base = $base;
		$this->discounted = $discounted;
	}

	public function getBase()
	{
		return $this->base;
	}

	public function getDiscounted()
	{
		return $this->discounted;
	}
}