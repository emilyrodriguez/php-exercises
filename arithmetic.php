<?php
$a = 5;
$b = a;

function errorMessage ($a, $b) {
	if ($b === 0) {
		fwrite(STDERR, "ERROR: Cannot divide by " . $b . "!\n");
	} elseif (!is_numeric($a)) {
		fwrite(STDERR, "Error: " . $a . " is not a number!\n");
	} elseif (!is_numeric($b)) {
		fwrite(STDERR, "Error: " . $b . " is not a number!\n");
	}
}

function add($a, $b){
 	if (is_numeric($a) && is_numeric($b)) {
 		return $a + $b;
 	} else {
 		errorMessage($a, $b);
 	}
 	
}

function subtract($a, $b){
 	if (is_numeric($a) && is_numeric($b)) {
 		return $a - $b;
 	} else {
 		errorMessage($a, $b);
 	}
}

function multiply($a, $b){
 	if (is_numeric($a) && is_numeric($b)) {
 		return $a * $b;
 	} else {
 		errorMessage($a, $b);
 	}
}
 	
function divide($a, $b){
 	if (is_numeric($a) && is_numeric($b)) {
 		return $a / $b;
 	} else {
 		errorMessage($a, $b);
 	}
}

 function modulus($a, $b){
 	if (is_numeric($a) && is_numeric($b)) {
 		return $a % $b;
 	} else {
 		errorMessage($a, $b);
 	}
}
 	

echo "Add: " . add($a, $b), PHP_EOL;
echo "Subtract: " . subtract($a, $b), PHP_EOL;
echo "Multiply: " . multiply($a, $b), PHP_EOL;
echo "Divide: " . divide($a, $b), PHP_EOL;
echo "Modulus: " . modulus($a, $b), PHP_EOL;

