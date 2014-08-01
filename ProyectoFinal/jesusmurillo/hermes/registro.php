<!DOCTYPE html>
<?php
	session_start();
	$form_token = md5( uniqid('auth', true) );
	$_SESSION['form_token'] = $form_token;
?>
<html>
	<head>
		<?php include 'head.php';?>
	</head>
	<body>
		<?php include 'cabecera.php';?>
		<section id="contenedor" class="centrar">
			<section id="cuerpo">
				<form action='procesar.php' method="POST" class="basic-grey">
					<h1>Ingresa tus datos</h1>
					<label>
						<span>Correo</span>
						<input type="text" id="mail" name="mail"/>
					</label>
					<label>
						<span>Nombre de usuario</span>
						<input type="text" id="usuario" name="usuario"/>
					</label>
					<label>
						<span>Contraseña</span>
						<input type="password" id="password" name="password"/>
					</label>
					<input type="hidden" name="form_token" value="<?php echo $form_token; ?>" />
					<label>
						<span>&nbsp;</span>
						<input type="submit" value="&rarr; Registrarse" class="button"/>
					</label>
				</form>
				<div class="anticolapso" style="clear: both;"></div>
			</section>
		</section>
		<?php include 'footer.php';?>
	</body>
</html>