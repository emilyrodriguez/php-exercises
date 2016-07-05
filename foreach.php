<?php
	$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
	foreach ($things as $thing) {
		if (is_int($thing)) {
			echo "{$thing} is a number\n";
			} elseif (is_float($thing)){
				echo "{$thing} is a float\n";
			} elseif (is_bool($thing)) {
				echo var_dump($thing) . "is a boolean\n";
			} elseif (is_array($thing)) {
				echo var_dump($thing) . "is an array\n";
			} elseif (is_null($thing)) {
				echo var_dump($thing) . "is null\n";
			} elseif (is_string($thing)) {
				echo "{$thing} is a string\n";
			}

		}
	echo "\n";

	foreach ($things as $thing) {
		if (is_scalar($thing)) {
			echo "{$thing} is a scalar\n";
		}
	}

	echo "\n";

	foreach ($things as $thing) {
		if (is_array($thing)) {
			echo "Array ";
			foreach ($thing as $number) {
				echo "{$number},";
			}
			echo "\n";
		}else {
			echo "{$thing}\n";
		}
	}
