<?php

namespace Starbuzz\Condiments;

use Starbuzz\Beverage;

class Mocha implements Beverage
{
	public $beverage;
	
	function __construct(Beverage $beverage)
	{
		$this->beverage = $beverage;
	}

	public function getDescription()
	{
		return $this->beverage->getDescription() . ", Mocha";
	}

	public function cost()
	{
		return 0.20 + $this->beverage->cost();
	}
}
?>