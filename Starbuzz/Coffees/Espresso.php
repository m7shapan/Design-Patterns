<?php 

namespace Starbuzz\Coffees;

use Starbuzz\Beverage;

class Espresso implements Beverage
{
	
	public function getDescription()
	{
		return "Dark Roast Coffee";
	}

	public function cost()
	{
		return 1.99;
	}
}


?>