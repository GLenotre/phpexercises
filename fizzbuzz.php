<?php

for ($a = 1; $a <= 30; $a = $a +1) {
	 if ($a % 3 == 0 && $a % 5 == 0) {
        echo "$a is fizzbuzz\n";
    } else if ($a % 3 == 0) {
        echo "$a is fizz\n";
    } else if ($a % 5 == 0) {
        echo "$a is buzz\n";
    } else {
        echo "$a\n";
    }
}