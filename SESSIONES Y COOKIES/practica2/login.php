<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
$autenticado = false;
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
			$autenticado=true;
			if(isset($_REQUEST['recordar'])){
				setcookie("nombre_usuario",$usuario,time()+1000);
			}
		}else{
			header('location:login.php');
		}

	}catch(Exeption $e){
	
		die('Error : '.$e->getMessage());
	
	}
}
?>

<?php
if($autenticado==false){
	if(!isset($_COOKIE["nombre_usuario"])){
		include("formulario.html");
	}
}
?>

<h1>HOLA PRO 
<?php
	if(isset($_COOKIE["nombre_usuario"])){
		echo $_COOKIE["nombre_usuario"];
	}elseif($autenticado==true){
		echo $_REQUEST['txt_usuario'];
	}
	?> :V YU REJITER :V</h1>
	<?php
	if($autenticado==true || isset($_COOKIE["nombre_usuario"])){
	include("pagina.html");	
	}
?>

</body>
</html>