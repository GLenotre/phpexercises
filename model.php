<?php

// An attributes property (array) that is not visible outside of the class


class Model
{
	protected static $table = '';  // every single instance of this will share the same value
	protected $attributes = [];

	public function __construct($name, $value)
	{

	}

// A magic setter to create key/value pairs in the attributes array.
	public function __set($name, $value) 
	{
		$this->attributes[$name] = $value;
	}

// A magic getter to retrieve values from the attributes array based on the key name, provided the key exists.
	public function __get($name)
	{
	    if (array_key_exists($name, $this->attributes)) 
	    {
	        return $this->attributes[$name];
	    }

	    return null;
	}

	public function getTablename(){
		return self::$table;	
	}
	

}

	$model = new Model();
	var_dump($model);

	$model->name = 'Joe Sachs';
	var_dump($model);

	$model->group = 'Codeup';
	var_dump($model);

	$model->age = 42;
	var_dump($model);


?>