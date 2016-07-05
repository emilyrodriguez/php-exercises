<?php
	$number = mt_rand(1, 100);
	$guessCount = 1;

	fwrite(STDOUT, "Welcome! Guess my number, it's between 1 and 100. \n");
	
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
