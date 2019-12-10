<?php
	try{
	//Se instacia PDO y se coloca el tipo de base de datos:host='direccion del host';dbname='nombre de la base de datos','usuario','contraseña'
	$conexion = new PDO('mysql:host=localhost;dbname=pruebas;charset=utf8','root','');
	$conexion -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
	}catch(Exeption $e){
		//Si no funcinona crea un objeto $e y llama la funcion para que nos muestre el error.
		die('Error :'.$e->GetMessage());
	}finally{
		$conexion = null;
	}
?>