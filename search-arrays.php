<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


function foundArray ($search, $names) {
	if (array_search($search, $names) !== false) {
		return true;
	} else {
		return false;
	}
}
var_dump(foundArray('Tina', $names));
var_dump(foundArray('Bob', $names));

function compareArray($array1, $array2) {
	$compareArray = array_intersect($array1, $array2);
	return count($compareArray);
}
var_dump(compareArray($names, $compare));


