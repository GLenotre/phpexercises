<?php

$var = 0;

do {
	$var += 2;
	echo "$var \n";
} while ($var < 99);

$var = 100;
do {
	echo $var . PHP_EOL;
	$var -= 5;
} while ($var > -11);

$x = 2;
do {
 echo $x . PHP_EOL;
 $x =$x * $x;
} while ($x < 1000000)