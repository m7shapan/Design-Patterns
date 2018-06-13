<?php 

namespace Starbuzz\Coffees;

use Starbuzz\Beverage;

class HouseBlend implements Beverage
{
	
	public function getDescription()
	{
		return "Dark Roast Coffee";
	}

	public function cost()
	{
		return 0.89;
	}
}


?>