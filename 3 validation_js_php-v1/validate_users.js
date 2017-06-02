function validate_usuario(usuario) {
    if (usuario.length > 0) {
        var regexp = /^[a-zA-Z0-9]*$/;
        return regexp.test(usuario);
    }
    return false;
}
function validate_dni(dni){
  if(dni.length === 9){
      var regexp=/([0-9]{8})([A-Z])/;
      if(regexp.test(dni)){
        var letter = dni.charAt(8);
        var numbers = dni.substr(0,8);
        var resto =numbers%23;
        var letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V',
					'H', 'L', 'C', 'K', 'E', 'T'];
        if(letter===letras[resto]){
          return true;
        }
      }
  }
  return false;
}
function validate_nombre(nombre) {
    if (nombre.length > 0) {
        var regexp = /^[a-zA-Z0-9]*$/;
        return regexp.test(nombre);
    }
    return false;
}
function validate_apellidos(apellidos) {
    if (apellidos.length > 0) {
        var regexp = /^[a-zA-Z0-9]*$/;
        return regexp.test(apellidos);
    }
    return false;
}
function validate_email(email) {
    if (email.length > 0) {
        var regexp = /^[A-Z0-9._%+-]+@(?:[A-Z0-9-]+.)+[A-Z]{2,4}$/i;
        return regexp.test(email);
    }
    return false;
}
function validate_password(password) {
    if (password.length > 0) {
        var regexp = /^(?:(\w[\w\d+.-]+):\/\/)?(?:(.+?):(.+)@)?(\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}|[^#:\/\?\s]+)(?::(\d+))?\/?(\/(?:[^#\/\?\s]+\/)*[^#\/\?\s]+\/?)?(?:\?((?:[^#=\/\s]+=[^&;#\/\s]+[&;]?)+))?(?:#(.+))?$/;
        return regexp.test(password);
    }
    return false;
}
function validate_password2(password, password2) {
	if(password === password2){
		return true;
    }
    return false;
}
function validate_movil(movil){
  if (movil.length === 9 ){
    var regexp = /\b\d{3}?\d{3}?\d{3}\b/;
    return regexp.test(movil);
  }
}
function validate_date_birthday(fecha_nacimiento){
  if(fecha_nacimiento.length > 0){
    var regexp = /\d{2}.\d{2}.\d{4}$/;
    return regexp.test(fecha_nacimiento);
  }
}
function validate_direccion(direccion){
  if(direccion.length > 3 ){
    return true;
  }
}


function validate_user() {
    var result = true;

    var dni = document.getElementById('dni').value;
    var nick = document.getElementById('nick').value;
    var nombre = document.getElementById('nombre').value;
	  var apellidos = document.getElementById('apellidos').value;
	  var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var password2 = document.getElementById('password2').value;
    var movil = document.getElementById('movil').value;
    var direccion = document.getElementById('direccion').value;
    var fecha_nacimiento = document.getElementById('fecha_nacimiento').value;


    var v_nick = validate_usuario(nick);
    var v_dni = validate_dni(dni);
	  var v_nombre = validate_nombre(nombre);
    var v_apellidos = validate_apellidos(apellidos);
    var v_email = validate_email(email);
    var v_password = validate_password(password);
    var v_password2 = validate_password2(password, password2);
    var v_movil = validate_movil(movil);
    var v_direccion = validate_direccion(direccion);
    var v_fecha_nacimiento = validate_date_birthday(fecha_nacimiento);
    //var v_date_birthday = validate_date_birthday(date_birthday);
    // console.log("usuario"+v_us	/*
	if (!v_nombre) {
        document.getElementById('e_nombre').innerHTML = "El nombre introducido no es valido";
        result = false;
    } else {
        document.getElementById('e_nombre').innerHTML = "";
    }
     if (!v_nick) {
         document.getElementById('e_nick').innerHTML = "El nick introducido no es valido";
         result = false;
     } else {
         document.getElementById('e_nick').innerHTML = "";
     }
    if (!v_dni) {
        document.getElementById('e_dni').innerHTML = "El dni introducido no es valido";
        result = false;
    } else {
        document.getElementById('e_dni').innerHTML = "";
    }
	   if (!v_nombre) {
        document.getElementById('e_nombre').innerHTML = "El nombre introducido no es valido";
        result = false;
    } else {
        document.getElementById('e_nombre').innerHTML = "";
    }
	   if (!v_apellidos) {
        document.getElementById('e_apellidos').innerHTML = "Los apellidos introducidos no son validos";
        result = false;
    } else {
        document.getElementById('e_apellidos').innerHTML = "";
    }

	   if (!v_email) {
        document.getElementById('e_email').innerHTML = "El email introducido no es valido";
        result = false;
    } else {
        document.getElementById('e_email').innerHTML = "";
    }

	if (!v_password) {
        document.getElementById('e_password').innerHTML = "El password introducido no es valido";
        result = false;
    } else {
        document.getElementById('e_password').innerHTML = "";
    }

	if (!v_password2) {
        document.getElementById('e_password2').innerHTML = "No coinciden los passwords";
        result = false;
    } else {
        document.getElementById('e_password2').innerHTML = "";
    }
    if (!v_movil) {
      document.getElementById('e_movil').innerHTML = "El movil introducido no es valido";
      result = false;
    }else {
        document.getElementById('e_movil').innerHTML = "";
    }
    if (!v_direccion) {
      document.getElementById('e_direccion').innerHTML = "La direccion introducida no es valida";
      result = false;
    }else {
        document.getElementById('e_direccion').innerHTML = "";
    }
    if (!v_fecha_nacimiento) {
      document.getElementById('e_fecha_nacimiento').innerHTML = "La fecha introducida no es valida";
      result = false;
    }else {
        document.getElementById('e_fecha_nacimiento').innerHTML = "";
    }
/*
    if (!v_date_birthday) {
        document.getElementById('e_date_birthday').innerHTML = "La fecha introducida no es valida";
        result = false;
    } else {
        document.getElementById('e_date_birthday').innerHTML = "";
    }
    */
	return result;
}
