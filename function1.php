<?php 

function sum($val1, $val2){
	return ($val1 + $val2);
}

$result = sum(5,6);
echo "the result is $result \n";

function substract($val1, $val2){
	// $result = "";
	// if($val1 >= $val2){
	// 	$result = ($val1 - $val2);
	// }else{
	// 	$result = ($val2 - $val1);
	// }

	//ternary operator
	$result = ($val1 >= $val2) ? ($val1 - $val2) : ($val2 - $val1);

	return $result;
}

$result = substract(15,5);
echo "the result is $result \n";

function mul($val1, $val2){
	return ($val1 * $val2);
}

$result = mul(5,6);
echo "the result is $result \n";

//function as callback

function calculate($val1, $val2, $operation){
	$result = $operation($val1, $val2);
	return $result;
}


$result = calculate(6,6,function($val1, $val2){
	return ($val1 * $val2);
});
echo "The result of calculate : $result \n";

$result = calculate(3,4,function($val1, $val2){
	return ($val1*$val2 + $val1*$val2);
});
echo "The result of calculate2 : $result \n";

//closer function

$fn = function($str1, $str2){
	return $str1.$str2; 
};

//function with multiple arguments

function total(...$values){
	print_r($values);
}

total(1,2,3,10,11);