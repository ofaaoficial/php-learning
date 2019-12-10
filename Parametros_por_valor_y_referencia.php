
<?php
//Parametros por valor y por referencia.

//Valor
function ejemplo_valor($parametro){
	$parametro++;
	return $parametro;
}

//Referencia se crea una conexion o referencia con el origen y se modifica la variable.
function ejemplo_referencia(&$parametro){
	$parametro++;
	return $parametro;
}

$num_v = 5;
$num_r = 5;

echo ejemplo_valor($num_v);
echo '<br>';
echo $num_v;
echo '<br>----------------------<br>';
echo ejemplo_referencia($num_r);


echo '<br>';
echo $num_r;
?>