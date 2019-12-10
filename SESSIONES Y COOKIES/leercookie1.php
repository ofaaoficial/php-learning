<?php
if(isset($_COOKIE["prueba"])){
	echo $_COOKIE["prueba"];
}else{
	echo 'La cookie no se a creado';
}
?>