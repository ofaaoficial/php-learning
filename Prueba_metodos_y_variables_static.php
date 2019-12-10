<?php
include("Concesionario.php");
//Para hacer referencia a una variable o metodo static que pertenece a la clase se usa 'self::'
Compra_vehiculos::Descuento();

$Cliente1 = new Compra_vehiculos("media");
$Cliente1->Climatizador();
$Cliente1->Navegador_gps();
$Cliente1->Tapiceria_cuerto("blanco");
echo "Precio final de la compra es de: ".$Cliente1->Precio_final()."$";


?>