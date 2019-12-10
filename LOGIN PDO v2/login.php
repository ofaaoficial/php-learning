<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php

if(isset($_REQUEST["login"])){
	try{

		$conexion = new PDO("mysql:host=localhost;dbname=pruebas;charset=utf8","root","");
		$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$SQL = "SELECT * FROM usuarios WHERE usuario = :usuario AND contrasenia = :contrasenia";
		$consulta = $conexion->prepare($SQL);
		
		$usuario = htmlentities(addslashes($_REQUEST['txt_usuario']));
		$contrasenia = htmlentities(addslashes($_REQUEST['txt_contrasenia']));

		//Funciones bindValue ':marcador' y bindParam '?'
		//llama a marcador y lo iguala a la variable.
		$consulta->bindValue(":usuario",$usuario);
		$consulta->bindValue(":contrasenia",$contrasenia);

		$consulta->execute();

		$numero = $consulta->rowCount();

		if($numero!=0){
			session_start();
			$_SESSION['usuario'] = $_POST['txt_usuario'];


		}else{
			header('location:login.php');
		}

	}catch(Exeption $e){
	
		die('Error : '.$e->getMessage());
	
	}
}
?>

<?php
	if(!isset($_SESSION['usuario'])){
	include("formulario.html");
}else{
	echo "Usuario : ".$_SESSION['usuario'];
}
?>

<h1>HOLA PRO :V YU REJITER :V</h1>


</body>
</html>