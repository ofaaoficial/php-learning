<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CRUD</title>
<link rel="stylesheet" type="text/css" href="hoja.css">


</head>

<body>

<?php
  include('conexion.php');
  /*$conexion = $base->query("SELECT * FROM datos_usuarios");
  $registros = $conexion->fetchAll(PDO::FETCH_OBJ);*/
  $registros = $base->query("SELECT * FROM datos_usuarios")->fetchAll(PDO::FETCH_OBJ);
?>
<h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>

  <table width="50%" border="0" align="center">
    <tr >
      <td class="primera_fila">Id</td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Apellido</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr> 
<?php
foreach ($registros as $datos) {
   echo'
      <tr>
      <td>'.$datos->ID.'</td>
      <td>'.$datos->Nombres.'</td>
      <td>'.$datos->Apellidos.'</td>
      <td class="bot"><a href="borrar.php?id='.$datos->ID.'"><input type="button" name="del" id="del" value="Borrar"></a></td>
      <td class="bot"><a href="editar.php?id='.$datos->ID.'&nom='.$datos->Nombres.'&ape='.$datos->Apellidos.'"><input type="button" name="up" id="up" value="Actualizar"></a></td>
      </tr>
      ';
}
?>

<form method="POST">
	<td></td>
      <td><input type='text' name='Nom' size='10' class='centrado'></td>
      <td><input type='text' name='Ape' size='10' class='centrado'></td>
      <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>    
  </table>
</form>

<?php
include('conexion.php');
if(isset($_REQUEST['cr'])){
  $nom = $_REQUEST['Nom'];
  $ape = $_REQUEST['Ape'];
  $SQL = "INSERT INTO datos_usuarios (Nombres,Apellidos) VALUES (?,?)";
  $resultado = $base->prepare($SQL);
  $resultado->execute(array($nom, $ape));
  header("location:index.php");
}
?>

<p>&nbsp;</p>
</body>
</html>