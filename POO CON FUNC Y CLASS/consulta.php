<?php
	require_once('conexion.php');
	//consulta hereda todas funciones de conexion.
	class consulta extends conexion{

		public function consulta(){

			parent::__construct();

		}

		public function get_usuarios($usuario){

			$resultado = $this->conexion_db->query('SELECT * FROM usuarios WHERE usuario = "'.$usuario.'"');
			
			$usuarios = $resultado->fetch_all(MYSQLI_ASSOC);
			return $usuarios;
		}


	}


?>