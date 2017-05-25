<?php
function validate_user(){
	$error='';
	$filtro = array(
		'dni' => array(
			'filter'=>FILTER_CALLBACK,
			'options'=>'EsDNI'
		),
		'nick' => array(
			'filter'=>FILTER_VALIDATE_REGEXP,
			'options'=>array('regexp'=>'/^[A-Za-z0-9]*$/')
		),

		'nombre' => array(
			'filter'=>FILTER_VALIDATE_REGEXP,
			'options'=>array('regexp'=>'/^[A-Za-z]*$/')
		),

		'apellidos' => array(
			'filter'=>FILTER_VALIDATE_REGEXP,
			'options'=>array('regexp'=>'/^[a-zA-Z]*$/')
		),

		'fecha_nacimiento' => array(
			'filter'=>FILTER_VALIDATE_REGEXP,
			'options'=>array('regexp'=>'/\d{2}.\d{2}.\d{4}$/')
		),
		'movil' => array(
			'filter'=>FILTER_VALIDATE_REGEXP,
			'options'=>array('regexp'=>'/\b\d{3}?\d{3}?\d{3}\b/')
		),
		'email' => array(
			'filter'=>FILTER_CALLBACK,
			'options'=>'validatemail'
		),
		'direccion' => array(
			'filter'=>FILTER_VALIDATE_REGEXP,
			'options'=>array('regexp'=>'/^.{2,32}$/')
		),
		'password' => array(
			'filter'=>FILTER_VALIDATE_REGEXP,
			'options'=>array('regexp'=>'/^.{6,32}$/')
		)
	);
	$resultado=filter_input_array(INPUT_POST,$filtro);
	if(!$resultado['dni']){
		$error['dni']='DNI: 9 caracteres';
	}if(!$resultado['nick']){
		$error['nick']='Nick: debe tener de 4 a 20 caracteres ';
	}if(!$resultado['nombre']){
		$error['nombre']='Nombre: debe tener de 4 a 20 caracteres ';
	}if(!$resultado['apellidos']){
		$error['apellidos']='Apellidos: debe tener de 4 a 120 caracteres ';
	}if(!$resultado['fecha_nacimiento']){
		$error['fecha_nacimiento']='Fecha_nacimiento: debe elegir una fecha';
	}if(!$resultado['movil']){
		$error['movil']='Movil: debes tener 9 numeros';
	}if(!$resultado['email']){
		$error['email']='El email debe contener de 5 a 50 caracteres y debe ser un email valido';
	}if(!$resultado['direccion']){
		$error['direccion']='El direccion debe contener de 5 a 50 caracteres';
	}if(!$resultado['password'] || $resultado['password']!=$_POST['password2'] ){
		$error['password']='Password debe tener de 6 a 12 caracteres y las dos contrasenyas deben ser iguales';
	}
	if($error == null){
		return $return=array('resultado'=>false , 'error'=>$error,'datos'=>$resultado);

	}
	return $return=array('resultado'=>true,'error'=>$error,'datos'=>$resultado);

};

function validatemail($email){
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			if(filter_var($email, FILTER_VALIDATE_REGEXP, array('options' => array('regexp'=> '/^.{5,50}$/')))){
				return $email;
			}
		}
		return false;
}

function EsDNI($dni){
	if(strlen($dni)===9){
			$regexp="([0-9]{8})([A-Z])";
			 if(ereg($regexp, $dni)){
				$array_dni = str_split($dni);
				$numbers = $array_dni[0].$array_dni[1].$array_dni[2].$array_dni[3].$array_dni[4].$array_dni[5].$array_dni[6].$array_dni[7];
				$resto = $numbers%23;
				$letra = $array_dni[8];
				$rule = "TRWAGMYFPDXBNJZSQVHLCKET";
				$letras = str_split($rule);

				if($letra===$letras[$resto]){
					return $dni;
				}
			 }
	}
	return false;
}




/////////////////////////////
	function debug($array){
		echo "<pre>";
		print_r($array);
		echo "</pre><br>";
	}
