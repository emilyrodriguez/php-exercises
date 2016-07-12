<?php
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


function arrayCombo($array1, $array2) {
	$newArray = [];
	foreach ($array1 as $key1 => $name1) {
		if ($name1 === $array2[$key1]) {
			array_push($newArray, $name1); 
		} else {
			array_push($newArray, $name1, $array2[$key1]);
		}
	}
	return $newArray;
}

function ComboArray($array1, $array2) {
	$newArray = [];
	for ($i = 0; $i < count($array1); $i++) {
		if ($array1[$i] === $array2[$i]) {
			array_push($newArray, $array1[$i]);
		} else {
			array_push($newArray, $array1[$i]);
		}
	}
	return $newArray;
}

print_r(arrayCombo($names, $compare));
print_r(ComboArray($names, $compare));












