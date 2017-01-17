<?php
//singleton
class Database{

	public static $INSTACE;

	public static function getInstance(){
		if(!isset(Database::$INSTACE))
			Database::$INSTACE = new Database();
		
		return Database::$INSTACE;
	}

	private function __construct(){
		/*private*/
	}

	public function query(){
		return "select * from some_table";
	}
}

class DB{}


$db = Database::getInstance();
$db2 = Database::getInstance();
$db3 = Database::getInstance();


/*
$db = new DB();
$db2 = new DB();
$db3 = new DB();
*/


//echo $db->query();
var_dump($db);
var_dump($db2);
var_dump($db3);
?>