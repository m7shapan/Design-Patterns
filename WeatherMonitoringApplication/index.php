<?php

require __DIR__ . '/vendor/autoload.php';

$weatherData = new WeatherMonitoringApplication\WeatherData();
$currentDisplay = new WeatherMonitoringApplication\CurrentConditionsDisplay($weatherData);
$heatIndex = new WeatherMonitoringApplication\HeatIndex($weatherData);

$weatherData->setMeasurements(80, 65, 30.4);
$weatherData->setMeasurements(82, 70, 29.2);
$weatherData->setMeasurements(78, 90, 29.2);

?>