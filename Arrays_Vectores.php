<?php

/*En php hay dos tipos de arrays:

Arrays indexados:
Son los que se acceden con el indice de la posicion al la cual queremos acceder ejemplo:
$Array_indexado_ej1 = array('Valor 1','Valor 2','Valor 3');
$Array_indexado_ej2[0] = 'Lunes';
$Array_indexado_ej2[1] = 'Martes';
//Ahora para ver el dentro del array en la posicion 1 valor seria lo siguiente:
echo $Array_indexado_ej1[1];
echo $Array_indexado_ej2[1]

Arrays asociativos:
Son los que se acceden con los nombres ejemplo:

$Array_asociativo_ej1 = array("Nombre"=>"Oscar","Apellido"=>"Amado");
//Ahora para ver el dentro del array se escribe el nombre que se le asigno lo siguiente:
//echo $Array_asociativo_ej1["Apellido"];


//Recorrer Array asociativo con foreach:

foreach($Array_asociativo_ej1 as $clave=>$valor){
	echo "$clave Le corresponde $valor";
}

//Recorrer Array indexado con foreach:

$Dias = array("Lunes","Martes","Miercoles","Jueves");

foreach($Dias as $i){
	echo $i;
}



//Array multidimencionales.


$SistemasOperativos = array("Windows"=>array("Version1"=>"98",
											 "Version2"=>"XP",
											 "Version3"=>"Windows Vista"),
				   			"Linux"  =>array("Hacking"=>"Kali Linux"),
				   			"Mac OS" =>array("Version1"=>"Kodiak",
										    "Version2"=>"Cheetah"));

//echo $SistemasOperativos["Windows"]["Version1"];


foreach($SistemasOperativos as $so=>$v){
	
	echo "<br> $so:";
	
	while(list($clave,$valor)=each($v)){
		echo "<br> $clave = $valor <br>";
	}	
	
	echo"<br>";
}

echo var_dump($SistemasOperativos);
*/
?>