<?php
	try{
	//Se instacia PDO y se coloca el tipo de base de datos:host='direccion del host';dbname='nombre de la base de datos','usuario','contraseña'
	$conexion = new PDO('mysql:host=localhost;dbname=pruebas;charset=utf8','root','');
	$conexion -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	$usuario = $_POST['txt_usuario'];

	$SQL = "DELETE FROM usuarios WHERE usuario = :usuario";
	$resultado = $conexion->prepare($SQL);
	$resultado->execute(array(':usuario'=>$usuario));
	
	$resultado->closeCursor();
		
	echo "Usuario eliminado.";
	
	}catch(Exeption $e){
		die('Error linea: '.$e->getLine());
	}finally{
		$conexion = null;
	}
?>