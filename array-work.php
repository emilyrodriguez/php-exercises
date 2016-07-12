<?php
// Write function to put array in alpha order
// can't use predefined sort functions

function alphabetize() {
$letters = ['e', 'a', 'g', 'c', 'i', 'd', 'f', 'b', 'h'];

for ($i = 0; $i < count($letters) - 1; $i++) {
	for ($j = $i + 1; $j < count($letters); $j++) {
		if ($letters[$i] > $letters[$j]) {
			$move = $letters[$i];
			$letters[$i] = $letters[$j];
			$letters[$j] = $move;

		}
	}
}	
	$lettersString = implode(', ', $letters). "\n";
	echo $lettersString;

}
	alphabetize();
?>