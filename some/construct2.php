<?php
class Cliente{
	public $nombre;
	public $numero, $pelicula_alquilada;

	function __construct($nombre,$numero){
		$this->nombre = $nombre;
		$this->numero = $numero;
		$this->pelicula_alquilada = array(); 
	}

	function dame_numero(){
		return $this->numero;
	}
}


$cliente1 = new Cliente("pepe",1);
$cliente2 = new Cliente("pepe2",562);

echo "el identificardor ".$cliente1->dame_numero();


?>