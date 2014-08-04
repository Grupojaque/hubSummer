<?php
session_start();
?>
<!DOCTYPE html>
 
<html>
 
    <head>
         <title>GYM :: ¡Tu suscripción ha expirado!</title>
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
    <h2 id = "menu"> Hola <?php echo $_SESSION['nombre'];?> </h2> 
    <p>Tu suscripción ha expirado.
       Puedes realizar tu pago en el siguiente enlace o directamente en el gimnasio
       y seguir disfrutando de los beneficios del GYM.
    </p>
                <li><a href="usuario_pagos.php">Realiza pago</a></li>
                <li><a href="../index.php">CERRAR SESIÓN</a></li>
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