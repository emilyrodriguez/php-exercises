<?php  
	for ($i = 0; $i<= 100; $i++) {
		if ($i % 3 == 0 && $i % 5 == 0) {
			fwrite(STDOUT, "FizzBuzz\n");
		} elseif ($i % 5 == 0) {
			fwrite(STDOUT, "Buzz\n");
		} elseif ($i % 3 == 0){
			fwrite(STDOUT, "Fizz\n");
		} else {
			fwrite(STDOUT, $i . PHP_EOL);
		}
	}
?>