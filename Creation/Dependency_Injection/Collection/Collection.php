<?php

class Collection
{

	protected $items =[];

	public function add($value)
	{

		$this->items[]=$value;

	}

	public function set($key,$value)
	{

		$this->items[$key] = $value;

	}

	public function toJson()
	{

		return json_encode($this->items)
	}

}


?>