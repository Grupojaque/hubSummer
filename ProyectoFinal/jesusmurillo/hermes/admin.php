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
		$stmt = $dbh->prepare("SELECT * FROM admins 
                    WHERE id = :id");
		$stmt->bindParam(':id', $_SESSION['id'], PDO::PARAM_INT);
		$stmt->execute();
		$datos = $stmt->fetch(PDO::FETCH_ASSOC);  
		$usuario = $datos['usuario'];  
		$mail = $datos['mail'];
		$aviso = $datos['aviso'];
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
						<p>Tu nombre de usuario es <?php echo $usuario; ?></p>
						<p>Tu correo es <?php echo $mail; ?></p>
						<h2>Tu aviso actual es</h2>
						<p><?php echo $aviso; ?></p>
						<h2>Editar información</h2>
						<p><a href="editarinfoadmin.php">Editar tu información</a></p>
						<h2>Usuarios</h2>
						<?php
							$server = 'localhost';
							$user = 'root';
							$pass = 'root';
							$db = 'hermes';
							$connection = mysql_connect($server, $user, $pass) 
								or die ("No se pudo contectar con la base de datos ...\n" . mysql_error ());
							mysql_select_db($db) 
								or die ("No se pudo contectar con la base de datos ...\n" . mysql_error ());
							$result = mysql_query("SELECT * FROM usuarios") 
								or die(mysql_error());
							echo "<table id='tabla'>";
							echo "<tr> <th>ID</th> <th>Usuario</th> <th>Mail</th> <th>Fecha</th><th></th><th></th></tr>";
							while($row = mysql_fetch_array( $result )) {
								echo "<tr>";
								echo '<td>' . $row['id'] . '</td>';
								echo '<td>' . $row['usuario'] . '</td>';
								echo '<td>' . $row['mail'] . '</td>';
								echo '<td>' . $row['fecha'] . '</td>';
								echo '<td><a href="editarusuario.php?id=' . $row['id'] . '">Editar</a></td>';
								echo '<td><a href="eliminarusuario.php?id=' . $row['id'] . '">Eliminar</a></td>';
								echo "</tr>"; 
							} 
							echo "</table>";
						?>
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
							or die ("No se pudo contectar con la base de datos ... \n" . mysql_error ());
						mysql_select_db($db) 
							or die ("No se pudo contectar con la base de datos ... \n" . mysql_error ());
						$result = mysql_query("SELECT * FROM admins") 
							or die(mysql_error());
						while($row = mysql_fetch_array( $result )) {
							echo '<h3>' . $row['usuario'] . ' dice:</h3>';
							echo '<p>' . $row['aviso'] . '</p>';
						}
					?>
				</section>
				<p><a href='registro.php'>Agregar usuario</a></p>
				<div class="anticolapso" style="clear: both;"></div>
			</section>
		</section>
		<?php include 'footer.php';?>
	</body>
</html>