<?php

require('./AbstractCalculator.php');

class Calculator extends AbstractCalculator{

	private $radius;

	public function __construct($radius){

		$this->radius = $radius;
	}

	public static function calculate($radius='')
	{
		// return $this->radius * $this->radius;
		return $radius * $radius;

	}

	public function print($newRadius){

		return "radius : $newRadius";
	}
}

$calculator = new Calculator(5);
print_r(Calculator::calculate(4));
// print_r($calculator->print(5));