<?php
session_start();
?>

<!DOCTYPE html>

<html>

	<head>
		 <title>CRUD :: Bienvenid@</title>
		 <meta charset="UTF-8">
		 <link rel="stylesheet" type="text/css" href="">
		<link rel="stylesheet" type="text/css" href="./css/inicio.css">
		<link rel="stylesheet" type="text/css" href="./css/bootstrap/css/bootstrap.min.css">	
	</head>

<body>
	<h2 id = "menu"> Bienvenid@ <?php echo $_SESSION['nombre'];?> </h2> 
	<div id="menu"> 
		<ul class="nav nav-tabs" role="tablist">
			
  				<li><a href="usuario_menuPrincipal.php">REGISTROS DE USUARIOS</a></li>
  				<li><a class="active" href="#">INGRESA UN NUEVO USUARIO</a></li>
  				<li><a href="usuario_Editar.php">EDITA TU INFORMACIÓN</a></li>
  				<li><a href="#">ELIMINA TU CUENTA</a></li>  
  				<li><a id="logOut" href="inicio.php">CERRAR SESIÓN</a></li>
		</ul>


	<form  class = "input-group"role="form" id="login" method="post" action="usuario_ingresaUsuario.php">
		
					 <div id="derecha">		
							<section id = "Nombre" class="campos">
									<h4>Nombre</h4> <input type="text" class="form-control" id="nombre">
							</section>

							<section id = "ApellidoPaterno" class="campos">
									<h4>Apellido paterno</h4> <input type="text" class="form-control" id="a_paterno">
							</section>

							<section id = "ApellidoMaterno" class="campos">
									<h4>Apellido materno</h4> <input type="text" class="form-control" id="a_materno">
							</section>

							<section id = "Sexo" class="campos">
										<h4>Sexo</h4>
		   								<input type="radio" name="sex" value="femenino" value="femenino">Femenino <br>

										<input type="radio" name="sex" value="masculino">Masculino
							</section>

							<section id = "f_nacimiento" class="campos">
									<h4>Fecha de nacimiento</h4>


									<article>
										<input type="text" class="form-control" id="dia" maxlength="2" size="2" placeholder = "Dia">
										<input type="text" class="form-control" id="mes" maxlength="2" size="2" placeholder ="Mes"> 
										<input type="text" class="form-control" id="anio" maxlength="4" size="4"placeholder= "Año">
									</article>
							</section>
					</div>


					<div id="izquierda">


								<section id = "Email" class="campos">
										<h4>Email</h4><input type="text" class="form-control" id="email">
								</section>

								<section id = "Username" class="campos">
									<h4>nombre de usuario</h4> <input type="text" class="form-control" id="usermame">
								</section>
								
								<section id = "Password" class="campos">
									<h4>contraseña</h4> <input type="password" class="form-control" id="pass">
								</section>	

								<section id = "Password" class="campos">
									<h4>confirma contraseña</h4> <input type="password" class="form-control" id="pass">
								</section>
					</div>				


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="../css/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>