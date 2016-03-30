<?php


class Rectangle 
{
	private $height;
	private $width;

	public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width  = $width;
    }

    protected function setHeight($height)
    {
    	$this->height = $height;
    }

    protected function getHeight()
    {
    	return $this->height;
    }

    protected function setWidth($width)
    {
    	$this->width = $width;
    }

    protected function getWidth()
    {0
    	return $this->width;
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