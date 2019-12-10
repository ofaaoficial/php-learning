<?php
	//nombre valor, clave valor.
	setcookie("prueba","Informacion",time()+30);
	//para eliminar
	setcookie("prueba","Informacion",time()-1);
?>
