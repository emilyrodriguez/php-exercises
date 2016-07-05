<?php
	fwrite(STDOUT, "Enter a starting number\n");
	$min = trim(fgets(STDIN));
	fwrite(STDOUT, "Enter an ending number\n");
	$max = trim(fgets(STDIN));
	fwrite(STDOUT, "Enter a number to increment by\n");
	$counter = trim(fgets(STDIN));

	if (!is_numeric($counter)) {
		$counter = 1;
	}
	
	if (is_numeric($min) && is_numeric($max) && $min < $max) {
		for ($i = $min; $i <= $max; $i += $counter) {
			fwrite(STDOUT, $i . PHP_EOL);
		} 
	}else {
		fwrite(STDERR, "You must enter numeric values.");
	}
