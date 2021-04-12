<?php 

//Associative arrays 
$stuMarks = array("Anu"=>500, "Manu"=>456,"Rohit"=>364,"sunil"=>256);
print_r($stuMarks);

//item count
echo count($stuMarks)."\n";

//iterating array
foreach ($stuMarks as $name => $marks) {
	echo "$name => $marks \n";
}

//all keys as array(indexed array)
$keys = array_keys($stuMarks);
print_r($keys);

//all values as simple array(indexed array)
$values = array_values($stuMarks);
print_r($values);

//-----------------------------//
//appending new key=>value pair

// $stuMarks["newName"] = 1400;
$stuMarks = $stuMarks + array("newName"=>590);
//$stuMarks = array("newName"=>590) + $stuMarks;
print_r($stuMarks);

//-------------//

//find the student whose marks > 300

print_r(array_filter($stuMarks,function($value,$key){
	echo "Key : $key \n";
	return $value >300;
},ARRAY_FILTER_USE_BOTH)); 	

//-------------------//
//add 1 to everyone's marks
print_r(array_map(function($value){
	return $value += 1;
}, $stuMarks));

$copyOfOriginal = array_walk($stuMarks, function(&$value, $key){
	return $value += 11;
});
print_r($copyOfOriginal);
print_r($stuMarks);
// array_map(callback, arr1)	||	array_walk(array, funcname i.e callback) :
// 1.multipe array can accept 	|| 	single array can accept 
// 2.It returns a new array     ||  It returns a existing array with modified values


//array_count_values() example
$arr1 = array(1, "hello", 1, "world", "hello");
print_r($arr1);
print_r(array_count_values($arr1));
//Note:array_count_values() returns an array using the values of array as keys and their frequency in array as values. 