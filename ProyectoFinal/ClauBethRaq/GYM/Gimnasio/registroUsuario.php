<?php
            $alert="";
            if(!empty($_POST)){                 
                include 'conexion.php';
                $correo = $_POST['correo'];
                $nombre = $_POST['nombre'];
                if ($correo == "" || $nombre=="") {
                 $alert="Llena todos los campos";
                }else{
                $con =  new conexion();
                $query = "insert into Solicitudes (NombreUsuario, Correo) values ('".$nombre.','.$correo."')";
                $q = $con -> Conecta($query); 
                $con -> Desconecta();
                $alert ="Se envio tu solicitud correctamente. Espera tu correo de aceptación";
                }
            }

?>
<!DOCTYPE html>
 
<html>
 
    <head>
         <title>GYM :: SOLICITUD DE INGRESO </title>
         <meta charset="UTF-8"> 
         <link rel="stylesheet" type="text/css" href="./css/bootstrap/css/bootstrap.min.css">
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
            <li><a href="index.php">Login</a></li>
            </ul>
        </nav>
    </header>
 
    <body> 
    <section id="us">   
        <div class="panel panel-info" id="contenedor">
 
            <div class="panel-heading">
                <h3 class="panel-title">REGISTRATE.</h3>
                <h4 class="panel-title">Ingresa tus datos correctamente y al ser aceptado recibiras un correo de confirmación.</h4>
                <h4><?php echo $alert;?></h4>
            </div>            
            <div class="panel-body">
                    <form role="form" id="log" method="POST" action="registroUsuario.php">
                            <h4>Nombre</h4>
                            <input type="text" class="form-control" placeholder="nombre" name ="nombre" id="nombre">
                            <h4>Correo</h4>
                            <input type="text" class="form-control" placeholder="correo" name ="correo" id="correo">
                            <br>
                            <button type="submit" class="btn btn-default pull-right">Enviar Solicutud</button>
                      
                    </form>           
            </div>
        </div>
 
 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="./css/bootstrap/js/bootstrap.min.js"></script>
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