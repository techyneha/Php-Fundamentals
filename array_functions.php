<?php

//simple array = list => duplicates are allowed

$numbers = array(23,45,6,32,21,32);
print_r($numbers);

//item count
echo count($numbers);

//append at end
$numbers[count($numbers)] = 100;
//print_r($numbers);

//prepend at start
array_unshift($numbers, 200);
print_r($numbers);


//removing from last
$lastItem = array_pop($numbers);
echo $lastItem;
print_r($numbers);

//removing from start
$firstItem = array_shift($numbers);
echo $firstItem;
print_r($numbers);

//extracting a slice of items from array
$subarray = array_slice($numbers, 2); //here first argument is arrray and second is offset value i.e index value of array from where you want array items
print_r($subarray);
print_r($numbers);


//find the numbers divisible by 2

// $divby2 = array_filter($numbers, function($numbers){
// 	return $numbers%2 === 0;
// });	
//print_r($divby2); 	

// above function behave as a callback function so we try this with another way

$filterFn = function($numbers){
	return $numbers%2 === 0;
};

$divby2 = array_filter($numbers, $filterFn);	
//print_r($divby2); 

//multiply each number of the above result by 10

$multiplyFn = function($number){
	return 5*$number;
};

$times10Arr = array_map($multiplyFn, $divby2);
print_r($times10Arr);

//Note :
// array_filter(arr , callback) 
// array_map(callback, arr1)

//Sort the above result
uasort($times10Arr, function($number1, $number2){
	return $number1 >= $number2 ? 1 : -1;
}); //here 2nd arg is comparator funtion 

//print_r($times10Arr);


//To find out the sum of array result
$total = 0;
foreach ($numbers as $num) {
	global $total;
	$total += $num;
}
echo "Total : $total \n";

// or  
$sum = array_reduce($numbers, function($total, $number){
	$total += $number;
	return $total;
}, 0);
echo "Sum : $sum \n";

//joining array items
$joinedItems = join("_",$numbers);
echo $joinedItems;

//filter th duplicates from array

$uniqueArr = array_unique($numbers);
print_r($uniqueArr);