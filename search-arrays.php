<?php


$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

//Return T or F depending on if $value is in $array
function searchInArray ($element, $array) {
	$result = array_search($element, $array);
	if ($result !== false) {
		return true;
	} else {
		return false;
	}
}
var_dump(searchInArray('Tina', $names));

//Return the number of elements $array and $array2 have in common

function compareArrays($array1, $array2) {
	$count = 0;
	foreach ($array1 as $element) {
		if (searchInArray($element, $array2)) {
			$count++;
		} 
	}
	return $count;
}

echo compareArrays($names,  $compare);