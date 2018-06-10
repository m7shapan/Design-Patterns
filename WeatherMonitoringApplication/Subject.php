<?php

namespace WeatherMonitoringApplication;

interface Subject
{
	
	public function registerObserver(Observer $o);

	public function removeObserver(Observer $o);

	public function notifyObservers();


}



?>