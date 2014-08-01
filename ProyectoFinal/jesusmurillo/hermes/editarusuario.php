<?php
function renderForm($id, $usuario, $mail, $fecha, $error)
{
?>
<html>
	<head>
		<? include 'head.php';?>
	</head>
	<body>
		<?php include 'cabecera.php';?>
		<section id="contenedor" class="centrar">
			<section id="cuerpo">
				<?php 
			if ($error != '')
			{
				echo '<p>'.$error.'</p>';
			}
				?> 
				<form action="" method="post" class="basic-grey">
					<h1>Editar información de <?php echo $usuario; ?></h1>
					<label>
						<span>ID</span>
						<input type="text" id="id" name="id" value="<?php echo $id; ?>" readonly/>
					</label>
					<label>
						<span>Usuario</span>
						<input type="text" id="usuario" name="usuario" value="<?php echo $usuario; ?>"/>
					</label>
					<label>
						<span>Mail</span>
						<input type="text" id="mail" name="mail" value="<?php echo $mail; ?>"/>
					</label>
					<label>
						<span>Fecha</span>
						<input type="text" id="fecha" name="fecha" value="<?php echo $fecha; ?>"/>
					</label>
					<label>
						<span>&nbsp;</span>
						<input type="submit" name="submit" value="&rarr; Editar" class="button"/>
					</label>
				</form>
			</section>
		</section>
		<?php include 'footer.php';?>
	</body>
</html> 
<?php
}
$server = 'localhost';
$user = 'root';
$pass = 'root';
$db = 'hermes';
$connection = mysql_connect($server, $user, $pass) 
	or die ("No se pudo contectar con la base de datos ... \n" . mysql_error ());
mysql_select_db($db) 
	or die ("No se pudo contectar con la base de datos ... \n" . mysql_error ());

if (isset($_POST['submit']))
{ 
	if (is_numeric($_POST['id']))
	{
		$id = $_POST['id'];
		$usuario = mysql_real_escape_string(htmlspecialchars($_POST['usuario']));
		$mail = mysql_real_escape_string(htmlspecialchars($_POST['mail']));
		$fecha = mysql_real_escape_string(htmlspecialchars($_POST['fecha']));
		if ($usuario == '' || $mail == '' || $fecha == '0000-00-00')
		{
			$error = 'Debes ingresar los campos requeridos';
			renderForm($id, $usuario, $mail, $fecha, $error);
		}
		else
		{
			mysql_query("UPDATE usuarios SET usuario='$usuario', mail='$mail', fecha='$fecha' WHERE id='$id'")
				or die(mysql_error()); 
			header('Location: admin.php');
		}
	}
	else
	{
		echo '¡Error!';
	}
}
else
{
	if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
	{
		$id = $_GET['id'];
		$result = mysql_query("SELECT * FROM usuarios WHERE id=$id")
			or die(mysql_error()); 
		$row = mysql_fetch_array($result);
		if($row)
		{
			$usuario = $row['usuario'];
			$mail = $row['mail'];
			$fecha = $row['fecha'];
			renderForm($id, $usuario, $mail, $fecha, '');
		}
		else
		{
			echo "¡No se pudieron obtener resultados!";
		}
	}
	else
	{
		echo '¡Error!';
	}
}
?>