<?php
// PHP for loops exercises using argc and argv. Also using is_numeric.
// global variables, so not to assign inside the if elseif statement.
$min;
$max;
$increment;
if ($argc == 1) {
    echo 'Ok, I will decide for you. Min 1, max 10, and incrementing by 2s.'.PHP_EOL;
    echo 'By the way, you can pass numbers after the file name.'.PHP_EOL;
    $min = 1;
    $max = 10;
    $increment = 2;
} else if ($argc == 2) {
    echo 'Gee, you only passed one number. No problem, I can make up the rest.'.PHP_EOL;
    $min = $argv[1];
    $max = $min + 10;
    $increment = 1;
} else if ($argc == 3) {
    $min = $argv[1];
    $max = $argv[2];
    $increment = 1;
} else if ($argc == 4) {
    $min = $argv[1];
    $max = $argv[2];
    $increment = $argv[3];
} 
// Checks the user input to see if it is numbers or letters.
if (!is_numeric($min) || !is_numeric($max) || !is_numeric($increment)) {
    die ("All arguments must be numbers\n");
}
// The for loop using the global variables.
for ($a = $min; $a <= $max; $a = $a + $increment) {
    echo "$a\n";
}