<?php
	$num = -1;
	if(!empty($_POST)){	
			session_start();
			include 'conexion.php';
			$username = $_POST['username'];
			$password = $_POST['password'];
			$con = 	new conexion();
			$query = "select * from usuarios where username="."'".$username."'"."and pass= "."'".$password."'";
			$q = $con -> Conecta($query);
			$num = mysqli_num_rows($q);
							while($filas = mysqli_fetch_array($q)){
									$id=$filas['id'];
									$admin = $filas['admin'];
									$nombre = $filas['nombre'];
							}							
			$_SESSION['id'] = $id;
			$_SESSION['admin'] = $admin;
			$_SESSION['nombre']=$nombre;
		if($admin == 1){/*Es administrador*/
			header('Location:admin_menuPrincipal.php');		
		} elseif($num == 0 ){
					echo "Fallo de autentificación. Introduce de nuevo tu usuario y contraseña";
				}else{					
					header('Location:usuario_menuPrincipal.php');					
				}

		
		$con -> Desconecta();
	}
?>

<!DOCTYPE html>

<html>

	<head>
		 <title>CRUD :: Iniciar Sesión </title>
		 <meta charset="UTF-8">		
		<link rel="stylesheet" type="text/css" href="css/inicio.css">
		<link rel="stylesheet" type="text/css" href="./css/bootstrap/css/bootstrap.min.css">	
	</head>

	<body>	
		<div class="panel panel-info" id="contenedor">

  			<div class="panel-heading">
    			<h3 class="panel-title">INGRESAR</h3>
  			</div>
  			<div class="panel-body">
    				<form role="form" id="log" method="POST" action="iniciaSesion.php">
    						<h4>Usuario</h4>
  							<input type="text" class="form-control" placeholder="Usuario" name ="username" id="username">
  							<h4>Contraseña</h4>
  							<input type="password" class="form-control" placeholder="Password" name="password" id = "password">
  							<br>
							<button type="submit" class="btn btn-default pull-right">Enviar</button>
					 
					</form>			
  			</div>
		</div>


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="./css/bootstrap/js/bootstrap.min.js"></script>
	</body>

</html>