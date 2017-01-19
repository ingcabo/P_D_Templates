<?php

class Chest
{

	protected $lock;
	protected $isLClosed;

	public function __construct($lock)
	{

		$this->lock = $lock;
	}

	public function close($lock = true)
	{

		if($lock === true){
			$this->lock= lock();			
		}
	
	$this->isLClosed = true;
	echo 'Closed';	
	}

	public function open()
	{

		if($this->lock->isLocked()){
			$this->lock->unlock();
		}

		$this->isLClosed= false;
		echo "Opened";

	}

	public function isLClosed()
	{

		return $this->isLClosed;

	}

}

?>