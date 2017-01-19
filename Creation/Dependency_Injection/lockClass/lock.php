<?php

protected $isLocked;

class lock 
{
	public function lock()
	{

		$this->isLocked  = true;

	}
	
	public function unlook()
	{

		$this->isLocked  = false;	

	}

	public function isLocked()
	{

		return $this->isLocked;

	}
}

?>