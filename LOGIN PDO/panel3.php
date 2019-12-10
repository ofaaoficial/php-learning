<?php
session_start();
if(!isset($_SESSION["usuario"])){
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Panel</title>
</head>
<body>
<h1>Bienvenido</h1>
<?php
echo "Allo  :V ".$_SESSION["usuario"];
?>
<p>Hola INFORMACION CONFIDENCIAL :V</p>
<a href="panel.php">p1</a>
<a href="panel2.php">p2</a>
<a href="panel3.php">p3</a>
<a href="cerrar_sesion.php">cerrar</a>
</body>
</html>