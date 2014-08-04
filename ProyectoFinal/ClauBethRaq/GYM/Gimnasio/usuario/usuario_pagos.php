<?php
session_start();
?>
<!DOCTYPE html>
 
<html>
 
    <head>
         <title>GYM :: PAGOS </title>
         <meta charset="UTF-8">       
        <link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.min.css">    
        <link rel="stylesheet" type="text/css" href="css/inicio.css">
        <link rel="stylesheet" type="text/css"  href="../css/gym.css"> 
    </head>
    <header>
        <h1>Super <strong>Gym</strong></h1>
        <nav>
            <ul class="menu">
            <li><a href="../gym.php">Inicio</a></li>
            <li><a href="../quienes.php">¿Quíenes somos?</a></li>
            <li><a href="../gal.php">Galeria</a></li>
            <li><a href="../acti.php">Actividades</a></li>
            <li><a href="../hor.php">Horarios</a></li>

            </ul>
        </nav>
    </header>
    <body>  
    <section id="us">  
            <h2 id = "menu"> Bienvenido <?php echo $_SESSION['nombre'];?> </h2> 
            <h2>Fecha de ultimo pago: <?php echo $_SESSION['fechaP'];?></h2>
            <div id="menu"> 
                <ul class="nav nav-tabs" role="tablist">
                        <li><a href="usuario_avisos.php">Avisos a nuestros usuarios</a></li>
                        <li><a href="usuario_actualizar.php">Edita tus datos</a></li>
                        <li><a href="usuario_contrasena.php">Cambiar contraseña</a></li>
                        <li class="active"><a href="#">Realiza pagos</a></li>
                        <li><a id="Cerrar Sesión" href="../index.php">CERRAR SESIÓN</a></li>
                </ul>
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
                <a href="https://www.facebook.com"> <img src="../images/facebook.png"></a>
                <a href="https://twitter.com/twitter_es"> <img src="../images/twitter.png"></a>
            </article>
        </footer>
</html>