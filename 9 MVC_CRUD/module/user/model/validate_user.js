
function validate_imdbID(texto){
    if (texto.length > 0){
        var reg=/^([a-z]{2}[0-9]{7})*$/;
        return reg.test(texto);
    }
    return false;
}

function validate_password(texto){
    if (texto.length > 0){
        var reg = /(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;
        return reg.test(texto);
    }
    return false;
}

function validate_titulo(texto){
    if (texto.length > 0){
        var reg=/^.{2,30}\s*$/;
        return reg.test(texto);
    }
    return false;
}

function validate_director(texto){
    if (texto.length > 0){
        var reg=/^.{2,30}\s*$/;
        return reg.test(texto);
    }
    return false;
}

function validate_actors(texto){
    if (texto.length > 0){
        var reg=/^.{2,200}\s*$/;
        return reg.test(texto);
    }
    return false;
}

function validate_fecha_lanzamiento(texto){
  if (texto.length > 0){
           return true;
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

function validate_website(website) {
    if (website.length > 0) {
        var regexp = /^https?:\/\/(www\.)?[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)$/i;
        return regexp.test(website);
    }
    return false;
}
function validate_type(texto) {
  console.log(texto);
    if (texto.length > 0) {
        var regexp = /^([m][o][v][i][e])|([s][e][r][i][e])$/i;
        return regexp.test(texto);
    }
    return false;
}

function validate_aficion(array){
    var i;
    var ok=0;
    for(i=0; i<array.length;i++){
        if(array[i].checked){
            ok=1
        }
    }

    if(ok==1){
        return true;
    }
    if(ok==0){
        return false;
    }
}

function validate(){

    var check=true;

    var v_imdbID=document.getElementById('imdbID').value;
    var v_titulo=document.getElementById('titulo').value;
    var v_director=document.getElementById('director').value;
    var v_actors=document.getElementById('actors').value;
    var v_fecha_lanzamiento=document.getElementById('fecha_lanzamiento').value;
    var v_plot=document.getElementById('plot').value.trim().length;
    var v_email=document.getElementById('email').value;
    var v_website=document.getElementById('website').value;
    var v_aficion=document.getElementsByName('aficion[]');

    var r_imdbID=validate_imdbID(v_imdbID);
    var r_titulo=validate_titulo(v_titulo);
    var r_director=validate_director(v_director);
    var r_actors=validate_actors(v_actors);
    var r_fecha_lanzamiento=validate_fecha_lanzamiento(v_fecha_lanzamiento);
    var r_plot=v_plot;
    var r_email=validate_email(v_email);
    var r_website=validate_website(v_website);
    var r_aficion=validate_aficion(v_aficion);

    if(!r_imdbID){
        document.getElementById('e_imdbID').innerHTML = " * El imdbID introducido no es valido";
        check=false;
    }else{
        document.getElementById('e_imdbID').innerHTML = "";
    }
    if(!r_titulo){
        document.getElementById('e_titulo').innerHTML = " * La titulo introducida no es valida";
        check=false;
    }else{
        document.getElementById('e_titulo').innerHTML = "";
    }
    if(!r_director){
        document.getElementById('e_director').innerHTML = " * El director introducido no es valido";
        check=false;
    }else{
        document.getElementById('e_director').innerHTML = "";
    }
    if(!r_actors){
        document.getElementById('e_actors').innerHTML = " * Los actores no son validos ";
        check=false;
    }else{
        document.getElementById('e_actors').innerHTML = "";
    }
    if(!r_fecha_lanzamiento){
        document.getElementById('e_fecha_lanzamiento').innerHTML = " * La fecha introducida no es valida";
        check=false;
    }else{
        document.getElementById('e_fecha_lanzamiento').innerHTML = "";
    }
    if(!r_plot){
        document.getElementById('e_plot').innerHTML = " *  El plot introducido no es valido";
        check=false;
    }else{
        document.getElementById('e_plot').innerHTML = "";
    }
    if(!r_email){
        document.getElementById('e_email').innerHTML = " * El email introducido no es valido";
        check=false;
    }else{
        document.getElementById('e_email').innerHTML = "";
    }
    if(!r_website){
        document.getElementById('e_website').innerHTML = " * La web introducida no es valida";
        check=false;
    }else{
        document.getElementById('e_website').innerHTML = "";
    }
    if(!r_aficion){
        document.getElementById('e_aficion[]').innerHTML = " * Debes seleccionar una casilla como minimo";
        check=false;
    }else{
        document.getElementById('e_aficion[]').innerHTML = "";
    }
        return check;
}
