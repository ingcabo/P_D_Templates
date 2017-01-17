<?php

class Conection{
	

	private function __construct(){
		echo "new objet created <br>";
	}

	public static function getInstance(){
		static $INSTANCE = NULL;		
		if (null == $INSTANCE){
			$INSTANCE = new static();
		}else{
			echo "using existing objet <br>";
		}
		return $INSTANCE;	

	}	
}


$objet1 =  Conection::getInstance();
$objet3 =  Conection::getInstance();
$objet2 =  Conection::getInstance();


?>