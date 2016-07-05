<?php
	$number = mt_rand(1, 100);
	$guessCount = 1;

	fwrite(STDOUT, "Welcome! Guess my number, it's between 1 and 100. \n");
	
		do { 
			$guess = fgets(STDIN);
			fwrite(STDOUT, "What is your guess? \n");
			if ($guess < $number) {
				echo "Higher!\n";
				$guessCount++;
			} elseif ($guess > $number) {
				echo "Lower!\n";
				$guessCount++;
			} else {
				echo "You got it!\n";
				echo "Guesses made: " . $guessCount . "\n";
				echo "To exit game, press Control + C\n";
			}
			} while ($guess !== $number);
