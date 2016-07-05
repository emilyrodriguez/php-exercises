<?php
	$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
	foreach ($things as $stuff) {
		if (is_int($stuff)) {
			echo "{$stuff} is a number\n";
			} elseif (is_float($stuff)){
				echo "{$stuff} is a float\n";
			} elseif (is_bool($stuff)) {
				echo var_dump($stuff) . "is a boolean\n";
			} elseif (is_array($stuff)) {
				echo var_dump($stuff) . "is an array\n";
			} elseif (is_null($stuff)) {
				echo var_dump($stuff) . "is null\n";
			} elseif (is_string($stuff)) {
				echo "{$stuff} is a string\n";
			}

		}
	echo "\n";
	
	foreach ($things as $stuff) {
		if (is_scalar($stuff)) {
			echo "{$stuff} is a scalar\n";
		}
	}

	echo "\n";

	foreach ($things as $stuff) {
		if (is_array($stuff)) {
			echo "Array ";
			foreach ($stuff as $number) {
				echo "{$number},";
			}
			echo "\n";
		}else {
			echo "{$stuff}\n";
		}
	}
