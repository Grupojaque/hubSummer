<!DOCTYPE html>
<?php
	if(isset($_POST['boton'])){
		include "../BaseDatos/connection.php";
		$connect = mysql_connect('localhost', 'root','theblackkeys1992');
		mysql_select_db('aplicaciones_web', $connect) or die(mysql_error($connect));
		$usuario = $_POST["user"];
    	$pass = $_POST["pass"];
    	$resultado = mysql_query("select * from usuarios where username = '$usuario'", $connect);
    	if($row = mysql_fetch_array($resultado)){     
			//Si el usuario es correcto ahora validamos su contraseña
 			if($row["pass"] == $pass){
 				if($usuario == "admin"){
  					//Creamos sesión
  					session_start();  
  					//Almacenamos el nombre de usuario en una variable de sesión usuario
  					$_SESSION['admin'] = $usuario;  
  					//Redireccionamos a la pagina
  					header("Location: paginaPrincipalAdmin.php");
  				}else{
  					//Creamos sesión
  					session_start();  
  					//Almacenamos el nombre de usuario en una variable de sesión usuario
  					$_SESSION['usuario'] = $usuario;  
  					//Redireccionamos a la pagina
  					header("Location: paginaPrincipalUser.php");	
  				}
  			}  
  		}else{
  			echo "<h2>Login o Password Incorrectos o Faltan Campos A Rellenar </h2>";
  		}
  	}				
?>
<html>
	<head>
			<!-- Bootstrap -->
			<link href="../Bootstrap/bootstrap.min.css" rel="stylesheet" media="screen">
			<link rel="stylesheet" type="text/css" href="/php/Tareas/CSS/sesion.css">
			<link rel="stylesheet" type="text/css" href="/php/Tareas/CSS/inicio.css">
	</head>
	<body>
		<header>
			<div class="page-header cabeza">
  				<h1 id="texto1">Iniciar Sesion<small>User</small></h1>
			</div>
		</header>
			<form action = " " method = "POST" class="form-horizontal sec1" >
	  			<div class="form-group">
	   			 <label for="inputEmail3" class="col-sm-2 control-label">Usuario</label>
	    		 <div class="col-sm-10">
	      			<input name = "user" class="form-control input" id="inputEmail3" placeholder="User">
	    		 </div>
	  			</div>
	  			<div class="form-group">
	    			<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
	    		    <div class="col-sm-10">
	      				<input name = "pass" type="password" class="form-control input" id="inputPassword3" placeholder="Password">
	    			</div>
	  			</div>
	  			<div class="form-group">
	    			<div class="col-sm-offset-2 col-sm-10">
	      				<div class="checkbox">
	        				<label>
	          					<input type="checkbox"> Remember me
	        				</label>
	      				</div>
	    			</div>
	  			</div>
	  			<div class="form-group">
	    			<div class="col-sm-offset-2 col-sm-10">
	      				<button class="btn btn-default" name="boton">Sign in</button>
	    			</div>
	  			</div>
			</form>
		</body>
	</html>
