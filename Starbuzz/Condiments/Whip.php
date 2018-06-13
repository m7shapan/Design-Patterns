<?php

namespace Starbuzz\Condiments;

use Starbuzz\Beverage;

class Whip implements Beverage
{
	public $beverage;
	
	function __construct(Beverage $beverage)
	{
		$this->beverage = $beverage;
	}

	public function getDescription()
	{
		return $this->beverage->getDescription() . ", Whip";
	}

	public function cost()
	{
		return 0.10 + $this->beverage->cost();
	}
}
?>