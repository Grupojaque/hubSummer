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
            <li><a href="gym.html">Inicio</a></li>
            <li><a href="quienes.html">¿Quíenes somos?</a></li>
            <li><a href="gal.html">Galeria</a></li>
            <li><a href="acti.html">Actividades</a></li>
            <li><a href="hor.html">Horarios</a></li>

            </ul>
        </nav>
    </header>
	<body id="cuerpo">
        <h2 id = "menu"> Bienvenid@ <?php echo $_SESSION['NombreUsuario'];?> </h2> 
    <div id="menu"> 
        <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href="administrador.php">SOLICITUDES</a></li>
                <li><a href="Ingresar_Usuario.php">INGRESA UN NUEVO USUARIO</a></li>
                <li><a href="Avisos.php">AVISOS</a></li>
                <li><a href="#">INFORMACIÓN DEL GIMNASIO</a></li>  
                <li><a id="logOut" href="iniciaSesion.php">CERRAR SESIÓN</a></li>
        </ul>
    </div>
    <br>
        
        
        <?php 
            $con =  new conexion(); 
            $query = 'insert into Pagos (Monto, TiempoPago, FormaPago) values ('.(int)$_POST['monto'].",". (int)$_POST['tiempo'].",". (int)$_POST['pago'].")";
            $sql = 'insert into Usuarios (NombreUsuario, Correo, Contrasena, isAdmin) values ('."'".$_POST['nombre']."', "."'".$_POST['correo']."', '".$_POST['pass']."', ".$_POST['isAdmin'].")";  
            $con -> Conecta($query);                        
            $con -> Conecta($sql);           

            echo "<h1> Registrado correctamente!!</h1>";

             ?>
        

                        
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