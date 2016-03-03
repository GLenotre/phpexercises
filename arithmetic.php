<?php

$x = 40;
$y = 20;

function validateAB($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return true;
    } else {
        return "Your inputs must be numeric" . PHP.EOL;
    }
}


function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
    if (validateAB($a, $b)) {
        return $a - $b;
    } 
}

function multiply($a, $b)
{
	if (validateAB($a, $b)) {
		return $a * $b;
	} 
}

function divide($a, $b)
{
    if (validateAB($a, $b)) {
	return $a / $b;
    }
}

function modulo($a, $b)
{
    if (validateAB($a, $b)) {
    return $a % $b;
    }
}

function throwErrorMessage ($error = 'numeric') {
    if($error == 'number') {
        return "Your inputs"
    }
}

// Add code to test your functions here
echo add($x, $y) . PHP_EOL;
echo subtract($x, $y) . PHP_EOL;
echo multiply($x, $y) . PHP_EOL;
echo divide($x, $y) . PHP_EOL;
echo modulo($x, $y) . PHP_EOL;
