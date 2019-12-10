<!DOCTYPE html>
<html>
<head>
	<title>Selecione el idoma</title>
</head>
<body>
<a href="creaCookie.php?idioma=en">English :V</a>
<a href="creaCookie.php?idioma=es">Spanish :V</a>
<?php
if(isset($_COOKIE['pag_idioma'])){
	if($_COOKIE['pag_idioma']=="en"){
		header('location:en.php');
	}elseif($_COOKIE['pag_idioma']=="es"){
		header('location:es.php');
	}
}
?>
</body>
</html>