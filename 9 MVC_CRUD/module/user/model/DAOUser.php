<?php
    include("model/connect.php");

	class DAOUser{
		function insert_film($user){
            $aficiones="";
            foreach ($user['aficion'] as $key => $value) {
                $aficiones.=$value.":";
            }
            $imdbID=$user['imdbID'];
            $titulo=$user['titulo'];
            $director=$user['director'];
            $actors=$user['actors'];
            $fecha_lanzamiento=$user['fecha_lanzamiento'];
            $plot=$user['plot'];
            $email=$user['email'];
            $website=$user['website'];
            $aficion=$aficiones;
            $idioma=$user['idioma'];
            $type=$user['type'];

            $sql = " INSERT INTO movies (imdbID, titulo, director, actors, fecha_lanzamiento, plot, email, website, aficion, idioma, type)"
            . " VALUES ('$imdbID', '$titulo', '$director', '$actors', '$fecha_lanzamiento', '$plot', '$email', '$website', '$aficion', '$idioma', '$type')";
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}

		function select_all_films(){
			$sql = "SELECT * FROM movies ORDER BY titulo ASC";

			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}

		function select_film($user){
			$sql = "SELECT * FROM movies WHERE imdbID='$user'";

			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql)->fetch_object();
            connect::close($conexion);
            return $res;
		}

		function update_film($user){
      $aficiones="";
      foreach ($user['aficion'] as $key => $value) {
          $aficiones.=$value.":";
      }
      $imdbID=$user['imdbID'];
      $titulo=$user['titulo'];
      $director=$user['director'];
      $actors=$user['actors'];
      $fecha_lanzamiento=$user['fecha_lanzamiento'];
      $plot=$user['plot'];
      $email=$user['email'];
      $website=$user['website'];
      $aficion=$aficiones;
      $idioma=$user['idioma'];
      $type=$user['type'];

        	$sql = " UPDATE movies SET titulo='$titulo', director='$director', actors='$actors', fecha_lanzamiento='$fecha_lanzamiento', plot='$plot', email='$email',"
        		. " website='$website', aficion='$aficiones', idioma='$idioma', type='$type' WHERE imdbID='$imdbID'";
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}

		function delete_film($user){
			$sql = "DELETE FROM movies WHERE imdbID='$user'";

			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}
	}
