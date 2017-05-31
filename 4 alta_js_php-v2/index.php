<?php
		include("functions.inc.php");
		session_start();

		$error = false;
		$errores = false;
		$error_imdbID = false;
		$error_titulo = false;
		$error_director = false;
		$error_actors = false;
		$error_fecha_lanzamiento = false;
		$error_plot = false;
		$error_email = false;
		$error_website = false;
		$error_aficion = false;
		$error_idioma = false;
		$error_type = false;
		if (isset($_POST['alta'])) {
			$error = validate_user();
			if(!empty($error['error'])){
				$errores=$error['error'];
				$error_imdbID = $errores['imdbID'];
				$error_titulo = $errores['titulo'];
				$error_director = $errores['director'];
				$error_actors = $errores['actors'];
				$error_fecha_lanzamiento = $errores['fecha_lanzamiento'];
				$error_plot = $errores['plot'];
				$error_email = $errores['email'];
				$error_website = $errores['website'];
				$error_aficion = $errores['aficion'];
				$error_idioma = $errores['idioma'];
				$error_type = $errores['type'];
			}
			if (!$error['resultado']) {
				//debug($_POST);
				//exit();

				$mensaje="Su registro se ha efectuado correctamente para finalizar compruebe que ha recibido un correo de validacion y siga las instrucciones del correo";
				$_SESSION['user']=$_POST;
				$_SESSION['msje']=$mensaje;
				$callback = 'results_users.php';

				//header("Location:$callback");
				die('<script>top.location.href="'.$callback .'";</script>');
			}
		}
		include 'form_users.php';
