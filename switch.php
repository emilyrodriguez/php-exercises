<?php
	// Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');

 if ($dayOfWeek == 1) {
 	echo "It's Monday!\n";
 } elseif ($dayOfWeek == 2) {
 	echo "It's Tuesday!\n";
 } elseif ($dayOfWeek == 3) {
 	echo "It's Wednesday!\n";
 } elseif ($dayOfWeek == 4) {
 	echo "It's Thursday!\n";
 } elseif ($dayOfWeek == 5) {
 	echo "It's Friday!\n";
 }  elseif ($dayOfWeek == 6) {
 	echo "It's Saturday!\n";
 } elseif ($dayOfWeek == 7) {
 	echo "It's Sunday!\n";
 }