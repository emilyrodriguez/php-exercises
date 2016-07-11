<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicistsArray = explode(',', $physicistsString);
$famousFakePhysicists = array_pop($physicistsArray);
$famousFakePhysicists = array_push($physicistsArray, " and Tony Stark");
$famousFakePhysicists = implode(',', $physicistsArray);
echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.\n";