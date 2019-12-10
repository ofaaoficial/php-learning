<?php
if(isset($_REQUEST['idioma'])){
	setcookie("pag_idioma",$_REQUEST['idioma'],time()+2000);
}

if(isset($_COOKIE['pag_idioma'])){
	if($_COOKIE['pag_idioma']=="en"){
		header('location:en.php');
	}elseif($_COOKIE['pag_idioma']=="es"){
		header('location:es.php');
	}
}
?>