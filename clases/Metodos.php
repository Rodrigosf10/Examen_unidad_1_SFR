<?php
    class Metodos{
		public function mostrarDatos($sql){
			$c = new Conectar();
			$conexion = $c->conexion();
			$result = mysqli_query($conexion,$sql);
			return mysqli_fetch_all($result, MYSQLI_ASSOC);
		}
		public function insertarDatos($datos){
			$c = new Conectar();
			$conexion = $c->conexion();
			$sql="INSERT INTO t_datos (sueldo,edad,sexo,nacionalidad,antiguedad,php,asp,vb,java,oracle,bd,bono) VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]','$datos[4]', '$datos[5]', '$datos[6]', '$datos[7]', '$datos[8]', '$datos[9]', '$datos[10]', '$datos[11]')"; 
			return $result = mysqli_query($conexion,$sql);
		}
	}
?>