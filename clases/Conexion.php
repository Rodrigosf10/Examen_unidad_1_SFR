<?php
    class Conectar{
        private $servidor = "localhost";
		private $usuario = "root";
		private $password = "";
		private $bd = "examen1";
        public function conexion(){
			//Respetar este orden para la conexion
			$conexion = mysqli_connect($this->servidor, $this->usuario, $this->password, $this->bd);
			return $conexion;
		}
    }
    $objeto = new Conectar();
	if($objeto->conexion()){
		//echo "Conexion con exito";
		//echo "<hr>";
	}else{
		//echo "Conexion fallida";
		//echo "<hr>";
	}
?>