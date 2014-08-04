<?php
session_start();
$carga= true;
?>

<!DOCTYPE html>

<html>

	<head>
		 <title>CRUD :: Bienvenid@</title>
		 <meta charset="UTF-8">
		 <link rel="stylesheet" type="text/css" href="./css/bootstrap/css/bootstrap.min.css">    
        <link rel="stylesheet" type="text/css" href="css/inicio.css">
        <link rel="stylesheet" type="text/css"  href="./css/gym.css"> 	
	</head>
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
<body>
	<section id="us"> 
	<h2 id = "menu"> Bienvenid@ <?php echo $_SESSION['nombre'];?> </h2> 
	<div id="menu"> 
		<ul class="nav nav-tabs" role="tablist">
  				<li class="active"><a href="administrador.php">SOLICITUDES</a></li>
  				<li><a href="Ingresar_Usuario.php">INGRESA UN NUEVO USUARIO</a></li>
  				<li><a href="Avisos.php">AVISOS</a></li>
  				<li><a href="#">INFORMACIÓN DEL GIMNASIO</a></li>  
  				<li><a id="logOut" href="index.php">CERRAR SESIÓN</a></li>
		</ul>

	<?php if($carga){
		
	echo "<form  class = 'input-group'role='form' id='login' method='post' action='Ingresar_Usuario.php'>";
		
		echo "<div id='derecha'>";
			echo	"<section id = 'Nombre' class='campos'>";
				echo		"<h4>Nombre</h4> <input type='text' name='nombre' class='form-control' id='nombre'>";
				echo "</section>";

				echo "<section id = 'Email' class='campos'>";
					echo "<h4>Email</h4><input type='text' name='correo' class='form-control' id='email'>";
				echo "</section>";
								
				echo "<section id = 'Password' class='campos'>";
					echo "<h4>Contraseña</h4> <input type='password' name='pass' class='form-control' id='pass'>";
				echo "</section>";
		echo "</div>";


		echo "<div id='izquierda'>";

			echo "<section id = 'Pago' class='campos'>";
				echo "<h4>Tipo Pago</h4>";
					echo "<input type='radio' name='pago' value='1'>Efectivo ";
					echo "<input type='radio' name='pago' value='0'>Tarjeta";
			echo "</section>";
			echo "<section id = 'Monto' class='campos'>";
				echo "<h4>Monto</h4><input type='tex' class='form-control' id='monto'>";
			echo "</section><br><br>";
							
			echo "<section id = 'tiempo' class='campos'>";
				echo "<h4>Tiempo Pagado</h4>";
				echo "<input type='radio' name='tiempo' value='1'>Anual";
				echo "<input type='radio' name='tiempo' value='0'>Mensual";
			echo "</section>";
		echo "</div>";
		echo "<br>";
		$carga = false;
		echo "<button type='submit' class='btn btn-default pull-right'>Enviar</button>";
		echo "</form>";
		}?>	


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="../css/bootstrap/js/bootstrap.min.js"></script>
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