<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejemplo validación formulario</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<br><br><br><br>
	<?php
		include("functions.inc.php");
		include("DAOUser.php");
		session_start();

		echo $_SESSION['msje'];
		$user = $_SESSION['user'];
		debug($user);
		try{
				$daouser = new DAOUser();
				$rdo = $daouser->nuevo_user($user);
		}catch (Exception $e){
			echo "PEto !!";
			die();
		}
		echo "$rdo";
		echo "dsklj flksajf sdfkl jsñlfk jsldñk jfsdlkjf b";

	?>
	<a href="index.php">Volver</a>
</body>
</html>
