<?php


$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


// Take in two array values as parameters and return a new array with values from both

function mergeArrays($array1, $array2) {
    $newArray = [] ;
    foreach ($array2 as $key => $element) {
		{
			if ($array1[$key] == $array2[$key]){
            	$newArray[] = $element;  // can also use array_push($newArray, $element); 
            } else {
            	$newArray[] = $array1[$key];
            	$newArray[] = $array2[$key];
            }
        }
    }
    return $newArray;
}

print_r(mergeArrays($names, $compare));


// key is an index with a string as a name, if we don't have a named key then the element defaults to a  numeric index
// If the arrays have the same value at the same index, then it should only be added once.
// If the values differ, then the value from the first array should be added and then the second.
// The function will need to use at least two of the array functions we discussed: