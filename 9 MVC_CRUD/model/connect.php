<?php
	class connect{
		public static function con(){
			$host = 'localhost';
    		$user = "root";
    		$pass = "OI";
    		$db = "movie";
    		$port = 3306;
    		$tabla="movies";

    		$conexion = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
			return $conexion;
		}
		public static function close($conexion){
			mysqli_close($conexion);
		}
	}
