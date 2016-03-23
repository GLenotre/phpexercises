<?php
	require_once 'rectangle.php';
	require_once 'square.php';

	$firstRectangle = new Rectangle(8, 4); 
	$firstSquare = new Square (4, 4);
	
	echo $firstRectangle->area();
	echo $firstSquare->perimeter();


?>