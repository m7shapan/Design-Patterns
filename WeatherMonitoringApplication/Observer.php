<?php 

namespace WeatherMonitoringApplication;

interface Observer 
{
	
	public function update($temp, $humidity, $pressure);

}

?>