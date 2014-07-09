<?php 
	session_start();
	include 'conexion.php';
	$con = 	new conexion();
	$query = "select * from usuarios";
	$q = $con -> Conecta($query);
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
  				<li class="active"><a href="#">REGISTROS DE USUARIOS</a></li>
  				<li><a href="usuario_ingresaUsuario.php">INGRESA UN NUEVO USUARIO</a></li>
  				<li><a href="usuario_Editar.php">EDITA TU INFORMACIÓN</a></li>
  				<li><a href="#">ELIMINA TU CUENTA</a></li>  
  				<li><a id="logOut" href="inicio.php">CERRAR SESIÓN</a></li>
		</ul>
	</div>
	<br>
	<div class="panel panel-info" id="tablaUsuarios">
  			<div class="panel-heading">USUARIOS</div>
				  <div class="panel-body"></div>	
  				<table class="table">
    				<th>Nombre</th>
    				<th>Apellido paterno</th>
    				<th>Apellido materno</th>
    				<th>Genero</th>
    				<th>Fecha de nacimiento</th>
    				<?php while ($filas = mysqli_fetch_array($q)){ ?>
					<tr>
					<td><?echo $filas['nombre'];?></td>	
					<td><?echo $filas['a_paterno'];?></td>
					<td><?echo $filas['a_materno'];?></td>	
					<td><?echo $filas['sexo'];?></td>	
					<td><?echo $filas['f_nacimiento'];?></td>		
					</tr>
					<? }?>

									
				

  				</table>
	</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="./css/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>