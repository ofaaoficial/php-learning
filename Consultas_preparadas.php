<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Consultas preparadas</title>
</head>

<body>
<form method="GET">
	<input type="text" name="busqueda">
	<input type="submit" name="buscar" value="Buscar!">
</form>
<?php
	if(isset($_GET['busqueda'])){
	$conexion = mysqli_connect('localhost','root','','trabajo1');
	mysqli_set_charset($conexion,'utf8');
	
	$usuario = $_GET['busqueda'];
		
	//Cosulta preparada:
		
	//1-  Se crea la sentencia SQL sustituyendo los valores del criterio por el simbolo "?".
		$SQL = "SELECT A,D,G FROM usuarios WHERE G = ?";
	//2-  Se prepara la consulta con la funcion "mysqli_prepare("La conexion","sentencia SQL")" esta funcion requiere dos parametros la conexion y la sentencia SQL
		$Resultado = mysqli_prepare($conexion,$SQL);
	/*
	3- Se unes los parametros a la sentencia SQL de esto se encarga la funcion mysqli_stmt_bind_paran() da como resultado true o false. Esta funcion requiere tres parametros el objeto mysqli_stmt (devuleto por mysqli_prepare), el tipo de dato que se ultilizara como criterio en sql y variable con criterio.
		i	la variable correspondiente es de tipo entero
		d	la variable correspondiente es de tipo double
		s	la variable correspondiente es de tipo string
		b	la variable correspondiente es un blob y se envía en paquetes
	*/
		$Comprobacion = mysqli_stmt_bind_param($Resultado,"s",$usuario);
	//4- Ejecuta la consulta con la funcion mysqli_stmt_execute(). Esta funcion devuleve true o false y necesita como parametro el objeto mysqli_stmt.
		$Comprobacion = mysqli_stmt_execute($Resultado);
		
	//5- Comprueba si hay algun resultado y no lo hay trira el mensaje de error.
		if($Comprobacion==false){
			echo "Error al ejecutar la consulta";
		}else{
	//6- Asocia variables al resultaod de la consulta. Esto lo conseguimos con la funcion mysqli_stmt_blind_result(). Devuelve true o false y necesita como parametros el objeto mysqli_stmt y tantas variables como columnas en consulta sql.
			$Comprobacion = mysqli_stmt_bind_result($Resultado,$A,$D,$G);
			
			echo "Articulos encontrados: <br>";
	//7- Lectura de valores. para ello utilizamos la funcion mysqli_stmt_fetch. Pide como parametros el objeto mysqli_stmt
			while(mysqli_stmt_fetch($Resultado)){
				echo $A.' '.$D.' '.$G.'<br>';
			}
	//8- Cierra una sentencia preparada
			mysqli_stmt_close($Resultado);
		}
	}
?>

</body>
</html>