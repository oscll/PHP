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
			$('#fecha_lanzamiento').datepicker({
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
	<form method="post" name="formusers" id="formusers" onsubmit="true" action="index.php"> <!-- return validate_user();-->
		<p>
			<label for="imdbID">imdbID</label>
			<input name="imdbID" id="imdbID" type="text" placeholder="imdbID" size="30%" value="<?php echo $_POST?$_POST['imdbID']:""; ?>" />
			<span id="e_imdbID" class="styerror"></span>
			<?php
				if ($error_imdbID != "")
		      		print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_imdbID . "</SPAN>");
			?>
		</p>
		<p>
			<label for="titulo">titulo</label>
			<input name="titulo" id="titulo" type="text" placeholder="titulo" size="30%" value="<?php echo $_POST?$_POST['titulo']:""; ?>" />
			<span id="e_titulo" class="styerror"></span>
			<?php
				if ($error_titulo != "")
		      		print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_titulo . "</SPAN>");
			?>
		</p>
        <p>
			<label for="director">director</label>
			<input name="director" id="director" type="text" placeholder="director" size="30%" value="<?php echo $_POST?$_POST['director']:""; ?>" />
			<span id="e_director" class="styerror"></span>
			<?php
				if ($error_director != "")
		      		print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_director . "</SPAN>");
			?>
		</p>
        <p>
			<label for="actors">actors</label>
			<input name="actors" id="actors" type="text" placeholder="actors" size="30%" value="<?php echo $_POST?$_POST['actors']:""; ?>" />
			<span id="e_actors" class="styerror"></span>
			<?php
				if ($error_actors != "")
		      		print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_actors . "</SPAN>");
			?>
		</p>
		<p>
			<label for="fecha_lanzamiento">Fecha de lanzamiento</label>
			<input name="fecha_lanzamiento" id="fecha_lanzamiento" type="text" size="30%" placeholder="fecha de lanzamiento" value="<?php echo $_POST?$_POST['fecha_lanzamiento']:""; ?>" readonly="readonly"/>
			<span id="fecha_lanzamiento" class="styerror"></span>
			<?php
				if ($error_fecha_lanzamiento != "")
		      		print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_fecha_lanzamiento . "</SPAN>");
			?>
		</p>
		<p>
			<label for="plot">plot</label>
			<!-- <input name="plot" id="plot" type="text" placeholder="plot" value="<?php// echo $_POST?$_POST['plot']:""; ?>" /> -->
			<textarea cols="35" rows="5" id="plot" name="plot" placeholder="plot" ><?php echo $_POST?$_POST['plot']:""; ?></textarea>
			<span id="e_plot" class="styerror"></span>
			<?php
				if ($error_plot != "")
		      		print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_plot . "</SPAN>");
			?>
		</p>
        <p>
			<label for="email">Email</label>
			<input name="email" id="email" type="text" placeholder="email" size="30%" value="<?php echo $_POST?$_POST['email']:""; ?>" />
			<span id="e_email" class="styerror"></span>
			<?php
				if ($error_email != "")
		      		print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_email . "</SPAN>");
			?>
		</p>
		<p>
			<label for="website">website</label>
			<input name="website" id="website" type="text" placeholder="website" size="30%" value="<?php echo $_POST?$_POST['website']:""; ?>" />
			<span id="e_website" class="styerror"></span>
			<?php
				if ($error_website != "")
		      		print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_website . "</SPAN>");
			?>
		</p>
        <p>
			<label for="aficion[]">Tematica</label>
			<input type="checkbox" id= "aficion[]" name="aficion[]" placeholder= "Comedia" value="Comedia"<?php $key=array_search("Comedia",$_POST['aficion'],true);
			if($key===0||$key===1||$key===2||$key===3){echo checked;}?> />Comedia
			<input type="checkbox" id= "aficion[]" name="aficion[]" placeholder= "Ciencia Ficcion" value="Ciencia Ficcio"
			<?php $key=array_search("Ciencia Ficcio",$_POST['aficion'],true);
			if($key===0||$key===1||$key===2||$key===3){echo checked;}?>/>Ciencia Ficcion
			<input type="checkbox" id= "aficion[]" name="aficion[]" placeholder= "Drama" value="Drama" <?php $key=array_search("Drama",$_POST['aficion'],true);
			if($key===0||$key===1||$key===2||$key===3){echo checked;}?>/>Drama
			<input type="checkbox" id= "aficion[]" name="aficion[]" placeholder= "Documental" value="Documental"<?php $key=array_search("Documental",$_POST['aficion'],true);
			if($key===0||$key===1||$key===2||$key===3){echo checked;}?>/>Documental
			<span id="e_aficion[]" class="styerror"></span>
			<?php
				if ($error_aficion != "")
		      		print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_aficion . "</SPAN>");
			?>
		</p>
        <p>
			<label for="idioma">Idioma</label>
			<select size="1" cols="35" id="idioma" name="idioma" placeholder="idioma" >
					<option value="Español">Español</option>
					<option value="Ingles">Ingles</option>
					<option value="Portugues">Portugues</option>
					<option value="Frances">Frances</option>
					<option value="Aleman">Aleman</option>
			</select>
			<span id="e_idioma" class="styerror"></span>
		</p>
		<p>
			<label for="type">Type</label>
			<input type="radio" name="type" value="0" checked> Serie
		  <input type="radio" name="type" value="1"> Movie<br>
			<span id="e_type" class="styerror">
				<?php
					if ($error_type != "")
			      		print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_type . "</SPAN>");
				?>
			</span>
		</p>
		<input name="alta" type="submit" value="Alta"/>
	</form>
</body>
</html>
