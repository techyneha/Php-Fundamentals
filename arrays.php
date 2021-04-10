<?php 
// array : ordered collection of items

$people = array(23,34,34,45,56);
print_r($people);

$people = array("neha","motu","sonu","monu","pagalu");
print_r($people);

//keys can be integer
$people = array(1 => "neha",2 => "motu", 3 => "sonu");
print_r($people);

//keys can be string
$people = array("neha" => 234,"motu"=> 345, "sonu" =>234);
print_r($people);

//keys can be integer and some are repeated
$people = array("neha" => 144,"motu"=> 345, "neha" =>234);
print_r($people);

//keys can be double and boolean
$people = array(true => "neha",3.4 => "motu", 4 => "sonu");
print_r($people);

//keys some key are given
$people = array(100 => "neha","motu", "sonu");
print_r($people);

$people = array("neha",110 => "motu", "sonu");
print_r($people);

// traversing array
foreach ($people as $key => $value) {
	echo "key = $key => $value \n"; 
}