<?php 
	session_start();
	include 'conexion.php';
	$con = 	new conexion();
	$query = "select * from Avisos";
	$q = $con -> Conecta($query);
?>

<!DOCTYPE html>

<html>

	<head>
		 <title>GYM :: Bienvenid@</title>
		 <meta charset="UTF-8">
		 <link rel="stylesheet" type="text/css" href="./css/inicio.css">
		 <link href="generic.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="./css/bootstrap/css/bootstrap.min.css">
         <link rel="stylesheet" type="text/css"  href="./css/gym.css"> 	
	</head>
	<body id="cuerpo">
		<header>
    	<h1>Super <strong>Gym</strong></h1>
    	<nav>
	    	<ul class="menu">
	    	<li><a href="gym.php">Inicio</a></li>
            <li><a href="quienes.php">¿Quíenes somos?</a></li>
            <li><a href="gal.php">Galeria</a></li>
            <li><a href="acti.php">Actividades</a></li>
            <li><a href="hor.php">Horarios</a></li>

	    	</ul>
    	</nav>
		</header>
		<section id="us" style="height: 350px;">
		<h2 id = "menu"> Bienvenid@ <?php echo $_SESSION['nombre'];?> </h2> 
	<div id="menu"> 
		<ul class="nav nav-tabs" role="tablist">
  				<li class="active"><a href="administrador.php">SOLICITUDES</a></li>
  				<li><a href="Ingresar_Usuario.php">INGRESA UN NUEVO USUARIO</a></li>
  				<li><a href="Avisos.php">AVISOS</a></li>
  				<li><a href="#">INFORMACIÓN DEL GIMNASIO</a></li>  
  				<li><a id="logOut" href="index.php">CERRAR SESIÓN</a></li>
		</ul>
	</div>
	<br>

	<div class="panel panel-info" id="tablaUsuarios">
			 
  				<table class="table" id="tabla">
    				<th>Fecha</th>    				
    				<th>Avisos</th>    				
    				<?php while ($filas = mysqli_fetch_array($q)){ ?>
					<tr>
					<td><?php echo $filas['Fecha'];?></td>	
					<td><?php echo $filas['TextoAviso'];?></td>						
					</tr>
					<?php }?>									

  				</table>	
  				
  			</div>
  			<?php 
		echo "<a href='Nuevo_Aviso.php'> <buttom class='btn btn-default pull-right'> Nuevo Aviso</buttom> </a>";

	?>

		

			
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