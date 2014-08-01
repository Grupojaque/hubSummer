<!DOCTYPE html>
<?php
session_start();
if(isset( $_SESSION['id'] ))
{
	$message = 'Ya estás conectado';
}
if(!isset( $_POST['usuario'], $_POST['password']))
{
	$message = 'Ingresa un usuario y contraseña';
}
elseif (strlen( $_POST['usuario']) > 20 || strlen($_POST['usuario']) < 4)
{
	$message = 'Tu nombre de usuario es incorrecto';
}
elseif (strlen( $_POST['password']) > 20 || strlen($_POST['password']) < 4)
{
	$message = 'Tu contraseña  es incorrecta';
}
elseif (ctype_alnum($_POST['usuario']) != true)
{
	$message = 'Tu nombre de usuario es incorrecto';
}
elseif (ctype_alnum($_POST['password']) != true)
{
	$message = 'Tu contraseña es incorrecta';
}
else
{
	$usuario = filter_var($_POST['usuario'], FILTER_SANITIZE_STRING);
	$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
	$password = sha1( $password );
	$mysql_hostname = 'localhost';
	$mysql_username = 'root';
	$mysql_password = 'root';
	$mysql_dbname = 'hermes';

	try
	{
		$dbh = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password);
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $dbh->prepare("SELECT id, usuario, password FROM usuarios 
                    WHERE usuario = :usuario AND password = :password");
		$stmt->bindParam(':usuario', $usuario, PDO::PARAM_STR);
		$stmt->bindParam(':password', $password, PDO::PARAM_STR, 40);
		$stmt->execute();
		$id = $stmt->fetchColumn();
		if($id == false)
		{
			$message = 'Falló el inicio de sesión';
		} else
		{
			$_SESSION['id'] = $id;
			$redirec = true;
			$message = 'Sesión iniciada';
		}
	}
	catch(Exception $e)
	{
		$message = 'Por el momento no podemos procesar tu solicitud, inténtalo más tarde.';
	}
}
?>
<html>
	<head>
		<title>Hermes Gym</title>
	</head>
	<body>
		<p><?php echo $message; ?></p>
		<?php if($redirec == true){echo "<script>setTimeout(\"location.href = 'usuario.php';\",1500);</script>";} else {echo "<script>setTimeout(\"location.href = '../index.php';\",1500);</script>";}?>
	</body>