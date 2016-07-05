<?php
	$min = 1;
	$max = 3;
	fwrite(STDOUT, "Enter a starting number\n");
	$min = trim(fgets(STDIN));
	fwrite(STDOUT, "Enter an ending number\n");
	$max = trim(fgets(STDIN));

	for ($i = $min; $i <= $max; $i++) {
		fwrite(STDOUT, $i . PHP_EOL);
	}