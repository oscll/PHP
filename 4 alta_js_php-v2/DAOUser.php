<?php
  include("connect.php");

	class DAOUser{
		function nuevo_user($user){

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
     	Conectar::close($conexion);

			return $res;
		}

	}
