<?php
require('Vehiculos.php');

//Al instanciar no es necesario poner los parentesis si el metodo constructor no recibe parametros.
//El operador 'new' siempre llama al constructor y si no esta creado se toma un constructor por defecto vacio.	
$ferrari = new Coche;
$pegaso = new Camion('8','Verde','2000');

echo "ferrari tiene ".$ferrari->get_ruedas()." ruedas<br>";
echo "pegaso tiene ".$pegaso->get_ruedas()." ruedas<br>";






/*
$ferrari->Establece_color('azul','ferrari');
//Haciendo uso de la sobreescritura de metodos.
$pegaso->Establece_color('rojo','pegado');
$pegaso->Arrancar();
*/







?>