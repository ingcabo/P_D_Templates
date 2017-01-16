<?php
//singleton


class Log{
	private static $INSTANCE = NULL;

	private function __construct(){
		//codigo para el constructor
	}

	public funtion getInstance(){
		//si nuestra variables INSTANCE es una instancia de nuestra clase log 
		if(self::$INSTANCE instanceof LOG){
			return self::$INSTANCE;
		}else{
			//regresar uns instancia nueva del objeto
			return self::$INSTANCE =  new log();
		}
	}

}



?>