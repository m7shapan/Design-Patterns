<?php

namespace WeatherMonitoringApplication;

class WeatherData implements Subject
{
	private $observers;
	private $temperature;
	private $humidity;
	private $pressure;


	function __construct()
	{
		$this->observers = array();
	}

	public function registerObserver(Observer $o)
	{
		$this->observers [] = $o;
	}

	public function removeObserver(Observer $o)
	{
		if (($key = array_search($o, $this->observers)) !== false) {
			unset($array[$key]);
		}
	}

	public function notifyObservers()
	{
		foreach ($this->observers as $observer) {
			$observer->update($this->temperature, $this->humidity, $this->pressure);
		}
	}


	
	public function getTemperature()
	{
		return 'temperature';
	}

	public function getHumidity()
	{
		return 'humidity';
	}

	public function getPressure()
	{
		return 'pressure';
	}

	public function measurementsChanged()
	{
		$this->notifyObservers();
	}

	public function setMeasurements($temperature, $humidity, $pressure)
	{
		$this->temperature = $temperature;
		$this->humidity = $humidity;
		$this->pressure = $pressure;
		$this->measurementsChanged();
	}
}

?>