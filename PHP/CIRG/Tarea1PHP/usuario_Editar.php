<!DOCTYPE html>

<html>

	<head>
		 <title>CRUD :: Bienvenida<?php// echo $_SESSION['username'];?></title>
		 <meta charset="UTF-8">
		 <link rel="stylesheet" type="text/css" href="">
		<link rel="stylesheet" type="text/css" href="./css/inicio.css">
		<link rel="stylesheet" type="text/css" href="./css/bootstrap/css/bootstrap.min.css">	
	</head>

<body>
	<h2 id = "menu"> BIENVENIDO Claus<?php// echo $_SESSION['nombre'];?> </h2> 
	<div id="menu"> 
		<ul class="nav nav-tabs" role="tablist">
			cd 
  				<li><a href="usuario_menuPrincipal.php">REGISTROS DE USUARIOS</a></li>
  				<li><a class="active" href="#">INGRESA UN NUEVO USUARIO</a></li>
  				<li><a href="usuario_Editar.php">EDITA TU INFORMACIÓN</a></li>
  				<li><a href="#">ELIMINA TU CUENTA</a></li>  
  				<li><a id="logOut" href="inicio.php">CERRAR SESIÓN</a></li>
		</ul>


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="../css/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>