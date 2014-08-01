<!DOCTYPE html>
<html>
	<head>
		<?php include 'head.php';?>
	</head>
	<body>
		<?php include 'cabecera.php';?>
		<section id="contenedor" class="centrar">
			<section id="cuerpo">
				<form method="post" action="ingresaradmin.php" class="basic-grey">
					<h1>Login</h1>
					<label>
						<p style="padding-left:0px;">Nombre de usuario</p>
						<input id="usuario" type="text" name="usuario" style="width:90%">
					</label>
					<label>
						<p style="padding-left:0px;">Contraseña</p>
						<input id="password" type="password" name="password" style="width:90%">
					</label>
					<label>
						<span>&nbsp;</span>
						<input id="enviar" type="submit" class="button" value="&rarr; Enviar" class="button">
					</label>
				</form>
				<br/>
			</section>
		</section>
		<?php include 'footer.php';?>
	</body>
</html>