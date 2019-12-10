<?php
	require_once('config.php');

	class conexion{

		protected $conexion_db;

		public function conexion(){

			$this->conexion_db = new mysqli(DB_host,DB_user,DB_pass,DB_name);

			if($this->conexion_db->connect_errno){
				echo "Error".$this->conexion_db->connect_errno;
				return;
			}

			$this->conexion_db->set_charset(DB_charset);
		}

	}



?>