<?php

$totalrun = 0;

function takeSingle(){
	global $totalrun;
	static $count = 0;
	$totalrun += 1; 
	return $count += 1;
}
function takeDouble(){
	global $totalrun;
	$totalrun += 2;  
}
function takeFour(){
	global $totalrun;
	$totalrun += 4;  
}
function takeSix(){
	global $totalrun;
	$totalrun += 6;  
}

takeSix();
$count = takeSingle();
takeFour();
$count = takeSingle();

echo "The Total runs : $totalrun \n";
echo "number of times single taken : $count \n";