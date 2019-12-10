<?php
	require_once('conexion.php');
	//consulta hereda todas funciones de conexion.
	class consulta extends conexion{

		public function consulta(){

			parent::__construct();

		}

		public function get_usuarios($usuario){

			$SQL = 'SELECT * FROM usuarios WHERE usuario = "'.$usuario.'"';

			$sentencia = $this->conexion_db->prepare($SQL);
			$sentencia->execute(array());
			$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);

			$sentencia->closeCursor();

			return $resultado;

			$this->conexion_db = null;
		}


	}


?>