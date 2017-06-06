<?php
    include("model/connect.php");

	class DAOUser{
		function insert_film($item){
            $aficiones="";
            foreach ($item['aficion'] as $key => $value) {
                $aficiones.=$value.":";
            }
            $imdbID=$item['imdbID'];
            $titulo=$item['titulo'];
            $director=$item['director'];
            $actors=$item['actors'];
            $fecha_lanzamiento=$item['fecha_lanzamiento'];
            $plot=$item['plot'];
            $email=$item['email'];
            $website=$item['website'];
            $aficion=$aficiones;
            $idioma=$item['idioma'];
            $type=$item['type'];

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

		function select_film($item){
			$sql = "SELECT * FROM movies WHERE imdbID='$item'";

			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql)->fetch_object();
            connect::close($conexion);
            return $res;
		}

		function update_film($item){
      $aficiones="";
      foreach ($item['aficion'] as $key => $value) {
          $aficiones.=$value.":";
      }
      $imdbID=$item['imdbID'];
      $titulo=$item['titulo'];
      $director=$item['director'];
      $actors=$item['actors'];
      $fecha_lanzamiento=$item['fecha_lanzamiento'];
      $plot=$item['plot'];
      $email=$item['email'];
      $website=$item['website'];
      $aficion=$aficiones;
      $idioma=$item['idioma'];
      $type=$item['type'];

        	$sql = " UPDATE movies SET titulo='$titulo', director='$director', actors='$actors', fecha_lanzamiento='$fecha_lanzamiento', plot='$plot', email='$email',"
        		. " website='$website', aficion='$aficiones', idioma='$idioma', type='$type' WHERE imdbID='$imdbID'";
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}

		function delete_film($item){
      $item = preg_replace('/\s+/', '', $item);
			$sql = "DELETE FROM movies WHERE imdbID='$item'";
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}

    function delete_all(){
        $sql = "DELETE FROM movies ";

        $conexion = connect::con();
          $res = mysqli_query($conexion, $sql);
          connect::close($conexion);
          return $res;
    }
	}
