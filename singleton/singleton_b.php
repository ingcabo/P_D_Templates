<?php

class Conection{
	private static $INSTANCE = NULL;

	private function __construct(){
		echo "new objet created <br>";
	}

	public static function getInstance(){
			
			if(self::$INSTANCE instanceof Conection){
			return self::$INSTANCE;
		}else{
			//regresar una instancia nueva del objeto
			return self::$INSTANCE =  new Conection();
		}
	}	
}


$objet1 =  Conection::getInstance();
$objet3 =  Conection::getInstance();
$objet2 =  Conection::getInstance();


?>