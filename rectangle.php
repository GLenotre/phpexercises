<?php


class Rectangle {
	public $height;
	public $width;

	public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width  = $width;
    }

    function area() {
    	$area = $this->height * $this->width;
    	return $area . PHP_EOL;
    }

    public function perimeter()
    {
    	return $this->width*2 + $this->height*2;
    }
}

?>