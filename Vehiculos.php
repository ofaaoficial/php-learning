<?php
//Objeto
//Super clase o clase madre
class Coche{
	//Atributos o propiedades de la clase coche o objeto coche.
    //Encapsulamos la variable ruedas para que solo se pueda acceder a ella desde la misma clase.
	protected $ruedas;
	var $color;
	protected $motor;
	//Metodo constructor - inicializa una clase o objeto.
	function Coche(){
		$this->ruedas=4;
		$this->color="Negro";
		$this->motor="Mega Ferrari 2017";
	}
	//Crear un metodo o funcion (Funcionalidades) de la clase o objeto.
	function get_ruedas(){
		return $this->ruedas;
	}
	function get_motor(){
		return $this->motor;
	}
	function get_informacion(){
		echo "Ruedas: ".$this->ruedas."<br>";
		echo "Color: ".$this->color."<br>";
		echo "Motor: ".$this->motor."<br>";
	}
	function Arrancar(){
		echo "Vehiculo arrancado.<br>";
	}
	function Frenar(){
		echo "Vehiculo frenando.<br>";
	}
	function Girar(){
		echo "Vehiculo girando.<br>";
	}
	function set_color($color_coche,$nombre_coche){
		$this->color=$color_coche;
		echo "El color de ".$nombre_coche." es ".$this->color."<br>";
	}
		
}
//Sub clase o clase hija 
//Objeto que hereda de Coche todas las variables y metodos.
class Camion extends Coche{
	//Metodo constructor - inicializa una clase o objeto.
	function Camion($ruedas,$color,$motor){
		$this->ruedas= $ruedas;
		$this->color = $color;
		$this->motor = $motor;
	}
	//Sobreescritura de metodos estamos heredando de la clase coche Establece_color pero al volverlo a definir en la clase con exactamente el mismo nombre los estamos sobreescribiendo el que ya heredamos.
	function Establece_color($color_camion,$nombre_camion){
		$this->color=$color_camion;
		echo "El color de ".$nombre_camion." es ".$this->color."<br>";
	}

	function Arrancar(){
		//parent se encarga de llamar el metodo de la super clase y lo ejecuta linea por linea, luego se puede agregar lo que se desea.	
		parent::Arrancar();
		echo "Arrancando camion.";
	}
		
}

/*Instancia 
$ferrari = new Coche();
$ferrari->Arrancar();
$ferrari->Frenar();
$ferrari->Girar();
$ferrari->Establece_color('azul','ferrari');*/
	
?>
