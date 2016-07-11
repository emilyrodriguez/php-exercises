<?php

function humanizedList($physicistsArray, $sort = false) {
	if ($sort) {
		sort($physicistsArray);
	}
	$famousFakePhysicists = array_pop($physicistsArray);
	$famousFakePhysicists = array_push($physicistsArray, " and Tony Stark");
	
	$famousFakePhysicists = implode(',', $physicistsArray);
	return $famousFakePhysicists;
}


$physicistsString = ' Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicistsArray = [];
$physicistsArray = explode(',', $physicistsString);
$famousFakePhysicists = humanizedList($physicistsArray, true);


echo "Some of the most famous fictional theoretical physicists are{$famousFakePhysicists}.\n";
?>