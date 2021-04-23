<?php

// $text = <<<TEXT
// This is an Online programming codecamp called Kodec@mp or kodecamp. kodecmp#$%^ kodeca@amp kodec@mp@gmail.com a
// TEXT;
$text = "KODECAMP";
//string matches

$matchedResults = array();

// $noOfmatches = preg_match_all("/[a-z]/", $text, $matchedResults); //match all character of a-z (small letters) only
// $noOfmatches = preg_match_all("/[a-zA-Z]/", $text, $matchedResults); //match all character of a-zA-Z (both small & capital letters) only
//$noOfmatches = preg_match_all("/[a-zA-Z]{0,2}/", $text, $matchedResults); // 2 character with space
// $noOfmatches = preg_match_all("/[a-zA-Z]1*/", $text, $matchedResults); //match all letters except special character
// $noOfmatches = preg_match_all("/kodec[@a]mp/", $text, $matchedResults);
// $noOfmatches = preg_match_all("/kode?c[@a]*mp/", $text, $matchedResults); 

// $noOfmatches = preg_match_all("/(kode)?c[@a]*mp/", $text, $matchedResults);
// $noOfmatches = preg_match_all("/(kode)c[@a]*mp/", $text, $matchedResults); //print 2 array 

// $noOfmatches = preg_match_all("/^kodecamp$/", $text, $matchedResults); 

$noOfmatches = preg_match_all("/kodecamp/i", $text, $matchedResults); // i represent case insensitive
echo "No Of matches : ". $noOfmatches .PHP_EOL;
print_r($matchedResults);