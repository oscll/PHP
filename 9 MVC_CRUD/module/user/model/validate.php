<?php
function validate_user(){
	$filtro = array(
		'imdbID' => array(
			'filter'=>FILTER_VALIDATE_REGEXP,
			'options'=>array('regexp'=>'/^([a-z]{2}[0-9]{7})*$/')
		),
		'titulo' => array(
			'filter'=>FILTER_VALIDATE_REGEXP,
			'options'=>array('regexp'=>'/^.{2,30}\s*$/')
		),

		'director' => array(
			'filter'=>FILTER_VALIDATE_REGEXP,
			'options'=>array('regexp'=>'/^.{2,30}\s*$/')
		),

		'actors' => array(
			'filter'=>FILTER_VALIDATE_REGEXP,
			'options'=>array('regexp'=>'/^.{2,200}\s*$/')
		),
		'fecha_lanzamiento' => array(
			'filter'=>FILTER_VALIDATE_REGEXP,
			'options'=>array('regexp'=>'/\d{2}.\d{2}.\d{4}$/')

		),
		'plot' => array(
			'filter'=>FILTER_VALIDATE_REGEXP,
			'options'=>array('regexp'=>'/^.{2,200}\s*$/')
		),
		'email' => array(
			'filter'=>FILTER_CALLBACK,
			'options'=>'validatemail'
		),
		'website' => array(
			'filter'=>FILTER_CALLBACK,
			'options'=>'validateurl'
		),
		'aficion' => array(
			'filter'=>FILTER_CALLBACK,
			'options'=>'v_aficion'
		),
		'idioma' => array(
			'filter'=>FILTER_VALIDATE_REGEXP,
			'options'=>array('regexp'=>'/^.{2,30}\s*$/')
		),
		'type' => array(
			'filter'=>FILTER_CALLBACK,
			'options'=>'v_type'
		)
	);
	$resultado=filter_input_array(INPUT_POST,$filtro);
	if(!$resultado['imdbID']){
		$error['imdbID']='El imdbID esta formado por 2 letras y 7 numeros';
	}if(!$resultado['titulo']){
		$error['titulo']='El titulo no es valido ';
	}if(!$resultado['director']){
		$error['director']='El director no es valido';
	}if(!$resultado['actors']){
		$error['actors']='Los actores no son validos ';
	}if(!$resultado['fecha_lanzamiento']){
		$error['fecha_lanzamiento']='Fecha de lanzamiento: debe elegir una fecha';
	}if(!$resultado['plot']){
			$error['plot']='La descripcion debe contener de 2 a 200 caracteres ';
	}if(!$resultado['email']){
		$error['email']='El email debe contener de 5 a 50 caracteres y debe ser un email valido';
	}if(!$resultado['website']){
		$error['website']='La direccion url no es valida';
	}if(!$resultado['aficion']){
		$error['aficion']='Debes marcar como minimo una aficion';
	}if(!$resultado['idioma']){
		$error['idioma']='Tienes que elegir un idioma';
	}if(!$resultado['type']){
		$error['type']='Selecciona un type ';
	}
		if((empty($error))){
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

function validateurl($url){
	if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
			return $url;
	} else {
		return false;
	}
}
function v_aficion($texto){
			if(!isset($texto) || empty($texto)){
					return $texto;
			}else{
					return false;
			}
}
function v_type($texto){
			if(($texto === "serie")||($texto === "movie")){
					return $texto;
			}else{
					return false;
			}
}
