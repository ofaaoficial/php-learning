<?php
	require_once('config.php');

	class conexion{

		protected $conexion_db;

		public function conexion(){

		try{
		
			$this->conexion_db = new PDO('mysql:host=localhost;db_name=pruebas;charset=utf8','root','');
			$this->conexion_db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXEPTION);

			return $this->conexion_db;
		
		}catch(Exeption $e){
			die("Error".$e->getLine())
		}

		}

	}



?>