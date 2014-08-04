<?php 
	session_start();
	include 'conexion.php';
	$con = 	new conexion();
	$query = "select * from Solicitudes";
	$q = $con -> Conecta($query);
?>

<!DOCTYPE html>

<html>

	<head>
		 <title>GYM :: Bienvenid@ Admin</title>
		 <meta charset="UTF-8">
		 <link rel="stylesheet" type="text/css" href="./css/bootstrap/css/bootstrap.min.css">    
        <link rel="stylesheet" type="text/css" href="css/inicio.css">
        <link rel="stylesheet" type="text/css"  href="./css/gym.css"> 	
	</head>
	<header>
        <h1>Super <strong>Gym</strong></h1>
        <nav>
            <ul class="menu">
            <li><a href="gym.html">Inicio</a></li>
            <li><a href="quienes.html">¿Quíenes somos?</a></li>
            <li><a href="gal.html">Galeria</a></li>
            <li><a href="acti.html">Actividades</a></li>
            <li><a href="hor.html">Horarios</a></li>

            </ul>
        </nav>
    </header>
	<body id="cuerpo">
		<section id="us"> 
		<h2 id = "menu"> Bienvenid@ <?php echo $_SESSION['nombre'];?> </h2> 
	<div id="menu"> 
		<ul class="nav nav-tabs" role="tablist">
  				<li class="active"><a href="#">SOLICITUDES</a></li>
  				<li><a href="Ingresar_Usuario.php">INGRESA UN NUEVO USUARIO</a></li>
  				<li><a href="Avisos.php">AVISOS</a></li>
  				<li><a href="#">INFORMACIÓN DEL GIMNASIO</a></li>  
  				<li><a id="logOut" href="inicio.php">CERRAR SESIÓN</a></li>
		</ul>
	</div>
	<br>
	<div class="panel panel-info" id="tablaUsuarios">
  			<div class="panel-heading">SOLICITUDES</div>
			 <div class="panel-body"></div>	
  				<table class="table" id="tabla">
    				<th>Nombre</th>    				
    				<th>Correo</th>
    				<th>Aceptado/Eliminado</th>
    				<?php while ($filas = mysqli_fetch_array($q)){ ?>
					<tr>
					<td><?php echo $filas['NombreUsuario'];?></td>	
					<td><?php echo $filas['Correo'];?></td>	
					<td>
						<button id="boton1" onclick="aceptarSolicitud()" class="btn btn-default pull-right">Aceptar</button>
						<button id="boton2" onclick="eliminarSolicitud()" class="btn btn-default pull-right">Eliminar</button>
						<script>
					function aceptarSolicitud(){
						$sql = "INSERT INTO Usuarios (NombreUsuario,Correo,Contrasena) VALUES ('"<?php echo $filas['NombreUsuario'];?>"','" <?php echo $filas['Correo'];?>"'," <?php echo rand(100000, 999999);?>");"
					}


						</script>
					</td>
					</tr>
					<?php }?>									

  				</table>					
											

	</div>
</section>
	</body>
	<footer id="footer">
            <article class="div">
                <h4>Contacto</h4>
                <p>Tel: 56728365</p>
                <p>e-mail: supergym@gmial.com</p>
            </article>
            <article class="div">
                <h4>Ubicación</h4>
                <p>Av. Siempreviva 742</p>
                <p>Springfild, EEUU</p>
            </article>
            <article>
                <h4>Redes Sociales</h4>
                <a href="https://www.facebook.com"> <img src="./images/facebook.png"></a>
                <a href="https://twitter.com/twitter_es"> <img src="./images/twitter.png"></a>
            </article>
        </footer>
 
</html>