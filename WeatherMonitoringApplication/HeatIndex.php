<?php

namespace WeatherMonitoringApplication;

class HeatIndex implements Observer, DisplayElement
{
	private $temperature;
	private $humidity;
	private $weatherData;
	
	function __construct(Subject $weatherData)
	{
		$this->weatherData = $weatherData;
		$weatherData->registerObserver($this);
	}

	public function update($temperature, $humidity, $pressure)
	{
		$this->temperature = $temperature;
		$this->humidity = $humidity;
		$this->display();
	}

	public function display()
	{
		$heatIndex = -42.379 + 2.04901523*$this->temperature + 10.14333127*$this->humidity - .22475541*$this->temperature*$this->humidity - .00683783*$this->temperature*$this->temperature - .05481717*$this->humidity*$this->humidity + .00122874*$this->temperature*$this->temperature*$this->humidity + .00085282*$this->temperature*$this->humidity*$this->humidity - .00000199*$this->temperature*$this->temperature*$this->humidity*$this->humidity;
		echo "Heat index is " . $heatIndex ." \n";
	}
}
?>