<?php

class Motor{
	public function _construct(){}
	public function arranca(){
		echo "run run run...<br>";
	}
}

class MotorDiesel extends Motor{
	public function _construct(){}
}

class MotorBiodiesel extends Motor{
	public function __construct(){}
}



class Carro{
	private $motor;
	public function __construct(Motor $motor){
		$this->motor = $motor;
		$this->motor->arranca();
	}
}	

$motorDiesel    = new MotorDiesel();
$motorBiodiesel = new MotorBiodiesel();

$carroDiesel = new Carro($motorDiesel);
$carroHipster= new Carro($motorBiodiesel);

//$carroDiesel->arranca();


?>