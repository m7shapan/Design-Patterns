<?php

namespace Starbuzz\Condiments;

use Starbuzz\Beverage;

class Soy implements Beverage
{
	public $beverage;
	
	function __construct(Beverage $beverage)
	{
		$this->beverage = $beverage;
	}

	public function getDescription()
	{
		return $this->beverage->getDescription() . ", Soy";
	}

	public function cost()
	{
		return 0.15 + $this->beverage->cost();
	}
}
?>