<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="hoja.css">
</head>

<body>

<h1>ACTUALIZAR</h1>

<p>

<?php
include('conexion.php');
if(isset($_REQUEST['bot_actualizar'])){
  $id = $_REQUEST['id'];
  $nom = $_REQUEST['nom'];
  $ape = $_REQUEST['ape'];
  $SQL = "UPDATE datos_usuarios SET Nombres = ? , Apellidos = ? WHERE ID = ?";
  $resultado = $base->prepare($SQL);
  $resultado->execute(array($nom, $ape, $id));
  header('location:index.php');
}
?>
 
</p>
<p>&nbsp;</p>
<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
  <table width="25%" border="0" align="center">
    <tr>
      <td></td>
      <td><label for="id"></label>
      <input type="hidden" name="id" id="id" value="<?php echo $_REQUEST['id']; ?>"><?php echo $_REQUEST['id']; ?></td>
    </tr>
    <tr>
      <td>Nombre</td>
      <td><label for="nom"></label>
      <input type="text" name="nom" id="nom" value="<?php echo $_REQUEST['nom']; ?>"></td>
    </tr>
    <tr>
      <td>Apellido</td>
      <td><label for="ape"></label>
      <input type="text" name="ape" id="ape" value="<?php echo $_REQUEST['ape']; ?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>