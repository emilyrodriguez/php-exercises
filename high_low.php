<?php
	if ($argc == 3) {
		$number = mt_rand($argv[1], $argv[2]);
		$guessCount = 0;
	
		fwrite(STDOUT, "Guess my number\n");
		
			do {
				$guess = trim(fgets(STDIN));
				fwrite(STDOUT, "What is your guess? \n");
	
				if ($guess < $number) {
					fwrite(STDOUT, "Higher!\n");
				} elseif ($guess > $number) {
					fwrite(STDOUT, "Lower!\n");
				} else {
					fwrite(STDOUT, "You got it!\n");
					fwrite(STDOUT, "Guesses made: " . $guessCount . "\n");
					fwrite(STDOUT, "To exit game, press Control + C\n");
				}
			 	$guessCount++;
			} while ($guess !== $number);
	}
?>

