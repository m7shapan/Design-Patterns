<?php

namespace ChocFactory;

class ChocolateBoiler 
{
	private static $uniqueInstance;
	private $empty;
	private $boiled;
	
	private function __construct()
	{
		$this->empty = true;
		$this->boiled = false;
	}

	public static function getInstance()
	{
		if (self::$uniqueInstance == null) {
			self::$uniqueInstance = new static();
		}

		return self::$uniqueInstance;
	}

	public function fill()
	{
		if ($this->isEmpty()) {
			$this->empty = false;
			$this->boiled = false;
			// fi ll the boiler with a milk/chocolate mixture
			echo "filled\n";
		}
	}

	public function drain()
	{
		if (!$this->isEmpty() && $this->isBoiled()) {
			// drain the boiled milk and chocolate
			echo "drained\n";
			$this->empty = true;
		}
	}

	public function boil()
	{
		if (!$this->isEmpty() && !$this->isBoiled()) {
			// bring the contents to a boil
			echo "boiled\n";
			$this->boiled = true;
		}
	}

	public function isEmpty()
	{
		return $this->empty;
	}

	public function isBoiled()
	{
		return $this->boiled;
	}
}
?>