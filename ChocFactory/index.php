<?php

require __DIR__ . '/vendor/autoload.php';
use ChocFactory\ChocolateBoiler;

$boiler = ChocolateBoiler::getInstance();

$boiler->fill();
$boiler->boil();
$boiler->drain();
?>