<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejemplo validación formulario</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
	<script src="validate_users.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script>
	<script type="text/javascript">
		$(function() {
			$('#fecha_nacimiento').datepicker({
			dateFormat: 'dd/mm/yy',
			changeMonth: true,
			changeYear: true,
			maxDate: '0Y-18Y',
			yearRange: '-64Y:'
		});
	});
	</script>
</head>
<body >
	<h1> Alta Usuario </h1>
	<form method="post" name="formusers" id="formusers" onsubmit="return validate_user();" action="index.php"> <!-- return validate_user();-->
		<p>
			<label for="dni">Dni</label>
			<input name="dni" id="dni" type="text" placeholder="dni" value="<?php echo $_POST?$_POST['dni']:""; ?>" />
			<span id="e_dni" class="styerror"></span>
			<?php
				if ($error_dni != "")
		      		print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_dni . "</SPAN>");
			?>
		</p>
		<p>
			<label for="nick">Nick</label>
			<input name="nick" id="nick" type="text" placeholder="nick" value="<?php echo $_POST?$_POST['nick']:""; ?>" />
			<span id="e_nick" class="styerror"></span>
			<?php
				if ($error_nick != "")
		      		print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_nick . "</SPAN>");
			?>
		</p>
        <p>
			<label for="nombre">Nombre</label>
			<input name="nombre" id="nombre" type="text" placeholder="nombre" value="<?php echo $_POST?$_POST['nombre']:""; ?>" />
			<span id="e_nombre" class="styerror"></span>
			<?php
				if ($error_nombre != "")
		      		print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_nombre . "</SPAN>");
			?>
		</p>
        <p>
			<label for="apellidos">Apellidos</label>
			<input name="apellidos" id="apellidos" type="text" placeholder="apellidos" value="<?php echo $_POST?$_POST['apellidos']:""; ?>" />
			<span id="e_apellidos" class="styerror"></span>
			<?php
				if ($error_apellidos != "")
		      		print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_apellidos . "</SPAN>");
			?>
		</p>
		<p>
			<label for="fecha_nacimiento">Fecha de nacimiento</label>
			<input name="fecha_nacimiento" id="fecha_nacimiento" type="text" placeholder="fecha de nacimiento" value="<?php echo $_POST?$_POST['fecha_nacimiento']:""; ?>" readonly="readonly"/>
			<span id="e_fecha_nacimiento" class="styerror"></span>
			<?php
				if ($error_fecha_nacimiento != "")
		      		print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_fecha_nacimiento . "</SPAN>");
			?>
		</p>
		<p>
			<label for="movil">Movil</label>
			<input name="movil" id="movil" type="tel" placeholder="movil" value="<?php echo $_POST?$_POST['movil']:""; ?>" />
			<span id="e_movil" class="styerror"></span>
			<?php
				if ($error_movil != "")
		      		print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_movil . "</SPAN>");
			?>
		</p>
        <p>
			<label for="email">Email</label>
			<input name="email" id="email" type="text" placeholder="email" value="<?php echo $_POST?$_POST['email']:""; ?>" />
			<span id="e_email" class="styerror"></span>
			<?php
				if ($error_email != "")
		      		print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_email . "</SPAN>");
			?>
		</p>
		<p>
			<label for="direccion">Direccion</label>
			<input name="direccion" id="direccion" type="text" placeholder="direccion" value="<?php echo $_POST?$_POST['direccion']:""; ?>" />
			<span id="e_direccion" class="styerror"></span>
			<?php
				if ($error_direccion != "")
		      		print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_direccion . "</SPAN>");
			?>
		</p>
        <p>
			<label for="password">password</label>
			<input name="password" id="password" type="password" placeholder="contrasenya" value="" />
			<span id="e_password" class="styerror"></span>
			<?php
				if ($error_password != "")
		      		print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_password . "</SPAN>");
			?>
		</p>
        <p>
			<label for="password2">password2</label>
			<input name="password2" id="password2" type="password"  placeholder="repite contrasenya" value="" />
			<span id="e_password2" class="styerror"></span>
		</p>
		<p>
			<label for="tipo">Tipo</label>
			<input type="radio" name="tipo" value="0" checked> Male
		  <input type="radio" name="tipo" value="1"> Female<br>
			<span id="e_tipo" class="styerror"></span>
		</p>
		<input name="alta" type="submit" value="Alta"/>
	</form>
</body>
</html>
