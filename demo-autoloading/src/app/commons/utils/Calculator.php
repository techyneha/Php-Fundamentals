<?php

namespace app\commons\utils;

class Calculator {

	public function __construct(){

	}

	function sum($number1, $number2){

		return $number1 + $number2;
	}

	function subtract($number1, $number2){

		return $number1 - $number2;
	}

	function multiply($number1, $number2){

		return $number1 * $number2;
	}

	function divide($number1, $number2){

		return $number1 / $number2;
	}
}