<?php


$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

//Return T or F depending on if $value is in $array
function searchInArray ($value, $array) {
	$result = array_search($value, $array);
	if ($result !== false) {
		return true;
	} else {
		return false;
	}
}
var_dump(searchInArray('Bob', $names));

//Return the number of elements $array and $array2 have in common

// function compareArrays($array1, $array2) {
// 	foreach ($array2 as $element) {
// 		if (!searchInArray($array2, $array1)) {
// 		array_push($newArray, $element);
// 		}
// 	}
// }
// echo compareArrays($names,  )