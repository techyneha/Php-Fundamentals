<?php

namespace com\advanceCal\utils;

class Calculator {

	public function __construct(){

	}

	function sumOfSeries(int ... $numbers){

		return array_reduce($numbers, function($total, $number){

			return $total += $number;
		}, 0);
	}

	function subsOfSeries(int ... $numbers){

		$firstNo = $numbers[0];

		$rest = array_slice($numbers, 1);

		return array_reduce($rest, function($total, $number) {
			return $total -= $number;
		}, $firstNo );
	}
}