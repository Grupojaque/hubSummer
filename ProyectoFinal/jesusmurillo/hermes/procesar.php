<?php
session_start();
if(!isset( $_POST['usuario'], $_POST['password'], $_POST['mail'], $_POST['form_token']))
{
	$message = 'Por favor ingresa un usuario, correo y contraseña válidos';
}
elseif( $_POST['form_token'] != $_SESSION['form_token'])
{
	$message = 'Registro inválido';
}
elseif (strlen( $_POST['usuario']) > 20 || strlen($_POST['usuario']) < 4)
{
	$message = 'Tu nombre de usuario debe tener una longitud mayor a 4 y menor a 20 caracteres, no debería';
}
elseif (strlen( $_POST['password']) > 10 || strlen($_POST['password']) < 4)
{
	$message = 'Tu contraseña debe tener una longitud mayor a 4 y menor a 10 caracteres, no debería';
} 
elseif (ctype_alnum($_POST['usuario']) != true)
{
	$message = 'Tu nombre de usuario debe ser alfanumérico';
}
elseif (ctype_alnum($_POST['password']) != true)
{
	$message = 'Tu contraseña debe ser alfanumérica';
}
elseif (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) != true)
{
	$message = 'Tu correo no es válido';
}
else
{
	$usuario = filter_var($_POST['usuario'], FILTER_SANITIZE_STRING);
	$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
	$mail = filter_var($_POST['mail'], FILTER_SANITIZE_STRING);
	$password = sha1( $password );
	$mysql_hostname = 'localhost';
	$mysql_username = 'root';
	$mysql_password = 'root';
	$mysql_dbname = 'hermes';
	try
	{
		$dbh = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password);
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $dbh->prepare("INSERT INTO usuarios (usuario, password, mail ) VALUES (:usuario, :password, :mail )");
		$stmt->bindParam(':usuario', $usuario, PDO::PARAM_STR);
		$stmt->bindParam(':password', $password, PDO::PARAM_STR, 40);
		$stmt->bindParam(':mail', $mail, PDO::PARAM_STR);
		$stmt->execute();
		unset( $_SESSION['form_token'] );
		$message = 'New user added';
		$redirec = true;
	}
	catch(Exception $e)
	{
		if( $e->getCode() == 23000)
		{
			$message = 'El usuario ya existía';
		}
		else
		{
			$message = 'Por el momento no podemos procesar tu solicitud, inténtalo más tarde.';
		}
	}
}
?>

<html>
	<head>
		<title>Hermes Gym</title>
	</head>
	<body>
		<p><?php echo $message; ?></p>
		<?php if($redirec == true){echo "<script>setTimeout(\"location.href = 'index.php';\",1500);</script>";} else {echo "<script>setTimeout(\"location.href = 'registro.php';\",1500);</script>";}?>
	</body>
</html>