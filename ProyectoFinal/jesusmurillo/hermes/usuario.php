<!DOCTYPE html>
<?php
session_start();
if(!isset( $_SESSION['id'] ))
{
	$message = '¡Tienes que iniciar sesión para entrar aquí!';
}
else
{
	try
	{
		$mysql_hostname = 'localhost';
		$mysql_username = 'root';
		$mysql_password = 'root';
		$mysql_dbname = 'hermes';
		$dbh = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password);
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $dbh->prepare("SELECT * FROM usuarios 
                    WHERE id = :id");
		$stmt->bindParam(':id', $_SESSION['id'], PDO::PARAM_INT);
		$stmt->execute();
		$datos = $stmt->fetch(PDO::FETCH_ASSOC);  
		$usuario = $datos['usuario'];  
		$mail = $datos['mail'];
		$fecha = $datos['fecha'];
		$expira = date('Y-m-d', strtotime("$fecha + 1 month"));
		$hoy = time();
		$resta = intval((strtotime($expira) - strtotime('now'))/60/60/24);
		if($usuario == false)
		{
			$message = 'Error de Acceso';
		}
		else
		{
			$message = 'Bienvendio '.$usuario;
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
		<?php include 'head.php';?>
	</head>
	<body>
		<?php include 'cabecera.php';?>
		<section id="contenedor" class="centrar">
			<section id="cuerpo">
				<section id="info">
					<article>
					<h1>Bienvenido <?php echo $usuario; ?></h1>
					<h2>Tu información</h2>
					<p>Tu correo es <?php echo $mail; ?></p>
					<p><a href="editarcorreo.php">Edita tu correo</a></p>
					<p><a href="editarpassword.php">Editar tu password</a></p>
					<h2>Tu estado de pago</h2>
					<p>Tu último pago fue el <?php echo $fecha; ?> </p>
					<p>Se acaba el <?php echo $expira; ?></p>
					<p>Te queda(n) <?php echo $resta ?> día(s) para renovar tu membresía</p>
					<p>Renueva tu membresía online</p>
					</article>
					</section>
				<section id="sidebar">
					<h2>Avisos</h2>
					<?php
						$server = 'localhost';
						$user = 'root';
						$pass = 'root';
						$db = 'hermes';
						$connection = mysql_connect($server, $user, $pass) 
							or die ("Could not connect to server ... \n" . mysql_error ());
						mysql_select_db($db) 
							or die ("Could not connect to database ... \n" . mysql_error ());
						$result = mysql_query("SELECT * FROM admins") 
							or die(mysql_error());
						while($row = mysql_fetch_array( $result )) {
							echo '<h3>' . $row['usuario'] . ' dice:</h3>';
							echo '<p>' . $row['aviso'] . '</p>';
						}
					?>
				</section>
				<div class="anticolapso" style="clear: both;"></div>
			</section>
		</section>
		<?php include 'footer.php';?>
	</body>
</html>