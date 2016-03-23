<?php
	require_once 'rectangle.php';
	require_once 'square.php';

	$firstRectangle = new Rectangle(8, 4); 
	$firstSquare = new Square (4);
	
	echo $firstRectangle->area();
	echo $firstSquare->perimeter();


	$secondRectangle = new Rectangle(9, 3);
	$secondRectangle->setHeight(3);

    $square = new Square(4);
?>