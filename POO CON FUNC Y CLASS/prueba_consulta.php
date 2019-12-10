<?php
require_once('consulta.php');
$usuario = $_REQUEST['txt_usuario'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Prueba consulta</title>
</head>
<body>
<?php

	$busqueda = new consulta();
	$resultado = $busqueda->get_usuarios($usuario);

	foreach($resultado as $registros){
		echo $registros['id'].$registros['usuario'].$registros['nombre'];

	}

?>
</body>
</html>