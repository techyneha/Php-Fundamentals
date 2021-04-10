<?php
//print any value in php

echo "Hello World \n";
echo "Hello", "Hi XYZ\n";

print("Hello world2\n");

$value = print("Hello world3\n");
print($value); //
print("\n");
//note : 
//1. echo can convert value in string then print
//2. echo can print multple value by comma seperated

//String

$firstname = "Techy"; //evaluate the value 
$lname = 'Neha';

$fullname = "$firstname and $lname \n";
echo $fullname;

$fullname1 = '$firstname and $lname';

echo($fullname1);
print("\n");
//print_r($fullname1);

//doubl/float
$marks = 56.6;

//integers
$age = 50;

//objects
$emptyobject = new stdclass();

//group of values in single enity
$items = array("neha","nikks","manu");

//external resourse
//boolean
$isIndian = true;

//nothing
$nomthing = null;

//problem with dynamic typing

$res = $fullname + $marks; 
//print("Marks : ". $res);

$res = $age + $marks;
print("Marks : ". $res);

//php is a dynamically type language it can check variable on run time

echo is_int($age);
echo is_string($fullname1);
echo is_double($marks);
