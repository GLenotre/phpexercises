<?php

$a = 40;
$b = 20;

function validateAB($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return true;
    } else {
        return false;
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
	return $a / $b;
}

// Add code to test your functions here
echo add($a, $b) . PHP_EOL;
echo subtract($a, $b) . PHP_EOL;
echo multiply($a, $b) . PHP_EOL;
echo divide($a, $b) . PHP_EOL;
// echo modulus($a, $b) . PHP_EOL;
