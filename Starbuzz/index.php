<?php

require __DIR__ . '/vendor/autoload.php';

use Starbuzz\Coffees\HouseBlend;
use Starbuzz\Coffees\DarkRoast;
use Starbuzz\Coffees\Espresso;
use Starbuzz\Condiments\Mocha;
use Starbuzz\Condiments\Whip;
use Starbuzz\Condiments\Soy;

$beverage = new Espresso();

echo $beverage->getDescription() . " $" . $beverage->cost() . "\n";

$beverage2 = new DarkRoast();
$beverage2 = new Mocha($beverage2);
$beverage2 = new Mocha($beverage2);
$beverage2 = new Whip($beverage2);

echo $beverage2->getDescription() . " $" . $beverage2->cost() . "\n";


$beverage3 = new HouseBlend();
$beverage3 = new Soy($beverage3);
$beverage3 = new Mocha($beverage3);
$beverage3 = new Whip($beverage3);

echo $beverage3->getDescription() . " $" . $beverage3->cost() . "\n";

?>