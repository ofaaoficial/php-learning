<?php

//Ejemplo

class Compra_vehiculos{
	private $precio_base;
	//Al declarar esta variable estatica quiere decir que esa variable no pertenece a ningun objeto, solo le pertenece a la clase.
	private static $descuento = 0;
	
	//Metodo constructor
	function Compra_vehiculos($gama){
		if($gama=="alta"){
			 $this->precio_base="10000000";
		 }elseif($gama=="media"){
			 $this->precio_base="5000000";
		 }elseif($gama=="baja"){
			 $this->precio_base="2500000";
		 }
	 }
	//Metodo que sera compartido por todos los objetos pero pertenece a la clase y no a una instancia.
	static function Descuento(){
		self::$descuento = 500000;
	}
	function Climatizador(){
		$this->precio_base+="500000";
	}
	function Navegador_gps(){
		$this->precio_base+="250000";
	}
	function Tapiceria_cuerto($color){
		if($color=="negro"){
		$this->precio_base+="250000";
		}elseif($color=="blanco"){
		$this->precio_base+="300000";
		}else{
		$this->precio_base+="200000";
		}
	}
	function Precio_final(){
		//Para hacer referencia a una variable o metodo static que pertenece a la clase se usa 'self::'
		$valor_final=$this->precio_base-self::$descuento;
		return $valor_final;
	}
}


?>