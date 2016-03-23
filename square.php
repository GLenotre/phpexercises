<?php
	require_once 'rectangle.php';

class Square extends Rectangle 
{
	public function perimeter()
	{ 
		return $this->height * 4 . PHP_EOL;
	}
}

// public function __construct($side)
// {
// 	parent::construct($side, $side);
// }

public function __set($name, $value) 
{
	$this->data[$name] = $value;
}

public function __get($name, $value) 
{
	return $this->data[$name];
}
?>
