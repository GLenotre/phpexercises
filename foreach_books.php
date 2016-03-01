<?php
// PHP foreach loops with arrays in arrays.
$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);
//First version of PHP foreach loop with only one foreach loop.
foreach ($books as $key => $value) {
	echo "First foreach; The book title is $key." . PHP_EOL;
	echo "{$value['published']}, {$value['author']}, {$value['pages']}" .  PHP_EOL;
}

foreach ($books as $title => $book) {
    if ($book['published'] > 1950) {
        echo "Second foreach; The book title is $title." . PHP_EOL;
        foreach ($book as $key => $value) {
            echo "$key is $value" . PHP_EOL;
        }
    }

// Notes on PHP foreach loop:
// foreach ($array as $key => $value) where $key is really the index. 
// If $key is not present as a string, it is index number like 0, 1, 2.
// foreach ($array as $value).