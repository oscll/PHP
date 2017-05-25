<?php
		include("functions.inc.php");
		//include("validate_users.php");
		session_start();

		$error = false;
		$errores = false;
		$error_nom = false;
		$error_dni = false;
		$error_nick = false;
		$error_nombre = false;
		$error_apellidos = false;
		$error_email = false;
		$error_fecha_nacimiento = false;
		$error_password = false;
		$error_password2 = false;
		$error_direccion = false;
		$error_movil = false;
		if (isset($_POST['alta'])) {
			$error = validate_user();
			if($error['error']!= null){
				$errores=$error['error'];
				$error_dni = $errores['dni'];
				$error_nick = $errores['nick'];
				$error_nombre = $errores['nombre'];
				$error_apellidos = $errores['apellidos'];
				$error_fecha_nacimiento = $errores['fecha_nacimiento'];
				$error_movil = $errores['movil'];
				$error_email = $errores['email'];
				$error_direccion = $errores['direccion'];
				$error_password = $errores['password'];
			}
        //print_r $error_nom;
            //die();
			// if($error_nom){
			// 	$error_nom = "El nombre no puede estar en blanco";
			// 	$error = true;
			// }
			// $error_dni = EsDNI($_POST['dni']);
			// if(!$error_dni){
			// 	$error_dni = "El dni no es valido";
			// 	$error = true;
			// }else{
			// 	$error_dni="";
			// }
			// $error_apellidos = EsApellidos($_POST['apellidos']);
			// if(!$error_apellidos){
			// 	$error_apellidos = "Los apellidos son invalidos";
			// 	$error = true;
			// }
			// $error_nom = EsRequerido($_POST['nombre']);
			// if(!$error_nom){
			// 	$error_nom = "El nombre no puede estar en blanco";
			// 	$error = true;
			// }else
			// $error_nom = EsRequerido($_POST['nombre']);
			// if(!$error_nom){
			// 	$error_nom = "El nombre no puede estar en blanco";
			// 	$error = true;
			// }
			// $error_nom = EsRequerido($_POST['nombre']);
			// if(!$error_nom){
			// 	$error_nom = "El nombre no puede estar en blanco";
			// 	$error = true;
			// }
			// $error_nom = EsRequerido($_POST['nombre']);
			// if(!$error_nom){
			// 	$error_nom = "El nombre no puede estar en blanco";
			// 	$error = true;
			// }
			// $error_nom = EsRequerido($_POST['nombre']);
			// if(!$error_nom){
			// 	$error_nom = "El nombre no puede estar en blanco";
			// 	$error = true;
			// }
			// $error_nom = EsRequerido($_POST['nombre']);
			// if(!$error_nom){
			// 	$error_nom = "El nombre no puede estar en blanco";
			// 	$error = true;
			// }
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
