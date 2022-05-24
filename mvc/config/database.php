<?php
/*creamos una clase conectar que se encargara de realizar 
la conexion con base de datos que acabamos de crear*/	
	class Conectar {
		
		public static function conexion() {
			
			$conexion = new mysqli("localhost", "root", "", "mvc");
			return $conexion;
			
		}
	}
?>