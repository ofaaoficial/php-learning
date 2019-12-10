<?php
	include('conexion.php');
	$id = $_REQUEST['id'];
	$base->query("DELETE FROM datos_usuarios WHERE ID = '$id'");
	header("location:index.php");
?>