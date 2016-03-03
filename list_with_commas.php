<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicistsArray = explode(', ', $physicistsString);


$physicists_array = humanizedList($physicistsArray, true);
	$tony = array_pop($physicists_array);
    $famousFakePhysicists = implode(', ', $physicists_array);
	$famousFakePhysicists = $famousFakePhysicists . ", and " . $tony;
    echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.\n";
    function humanizedList ($array, $sort = false) {
        if ($sort === true) {
	        sort($array);
	        return $array;	
        }
    } 
