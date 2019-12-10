<?php

	$conexion = new mysqli("localhost","root","","trabajo1");
	
	if($conexion->connect_errno){
		echo "Error con la conexion ".$conexion->connect_errno;
		$conexion->set_charset("utf8");
	}

	$SQL = "SELECT * FROM usuarios";

	$resultado = $conexion->query($SQL);
	
	if($conexion->errno){
		die($conexion->error);
	}

	while($fila = $resultado->fetch_assoc()){
		
	echo $fila['B'];
		
	}

	$conexion->close();

	
?>