<?php

$text = <<<TEXT
This is an Online programming codecamp called Kodec@mp or kodecamp.
#$%^
TEXT;

//character match
$matchedString = array();
$stringLength = strlen($text);

// $noOfMatches = preg_match_all("/./", $text, $matchedString);

 $noOfMatches = preg_match_all("/\S/", $text, $matchedString);

// $noOfMatches = preg_match_all("/\w/", $text, $matchedString);


// $noOfMatches = preg_match_all("/\s/", $text, $matchedString); //it count all spaces with new line space

echo $stringLength.PHP_EOL;

echo "No of matches : ". $noOfMatches . PHP_EOL;
print_r($matchedString);

