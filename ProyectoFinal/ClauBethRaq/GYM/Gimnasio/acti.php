<?php 
	session_start();
	include 'conexion.php';
	$con = 	new conexion();
	$query = "select * from Actividades";
	$q = $con -> Conecta($query);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>SuperGym</title>
		<meta charset="utf-8">
		<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="./css/bootstrap/css/bootstrap.min.css">
         <link rel="stylesheet" type="text/css"  href="./css/gym.css"> 
	</head>
	<body>
		<header>
    	<h1>Super <strong>Gym</strong></h1>
    	<nav>
	    	<ul class="menu">
	    	<li><a href="gym.php">Inicio</a></li>
            <li><a href="quienes.php">¿Quíenes somos?</a></li>
            <li><a href="gal.php">Galeria</a></li>
            <li><a href="acti.php">Actividades</a></li>
            <li><a href="hor.php">Horarios</a></li>
	        <li><a href="index.php">Login</a></li>

	    	</ul>
    	</nav>
		</header>
		<section id="content">
    
    	
      <article id="acti">
    	<div class="tit"><h1>Actividades</br></h1></div>
    	<div class="inf">
    		<div class="panel panel-info" id="tablaUsuarios">
  			
				  	
  				<table class="table">
    				<th>Nombre</th>
    				<th>Descripción</th>
    				<?php while ($filas = mysqli_fetch_array($q)){ ?>
					<tr>
					<td><?echo $filas['NombreAct'];?></td>	
					<td><?echo $filas['DescripcionActividad'];?></td>	
					</tr>
					<? }?>

									
				

  				</table>
	</div>
    	</div>
    
    </article>
    
  </section>
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
	</body>
</html>