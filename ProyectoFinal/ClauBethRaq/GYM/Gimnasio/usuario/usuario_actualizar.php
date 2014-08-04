<?php
    session_start();

    if(!empty($_POST)){         
        
        include '../conexion.php'; 
        $con = new conexion();

        $correoN = $_POST['correo'];
        $nombreN = $_POST['nombre'];

        if($correoN != ""){
            $query = "update Usuarios set NombreUsuario= '".$nombreN."' where idUsuario= '".$_SESSION['id']."'";
            $q = $con -> Conecta($query);
            $_SESSION['nombre'] =$nombreN;
            echo "Se cambio el nombre";
        }       

        if ($nombreN != "") {
            $query = "update Usuarios set Correo = '".$correoN."' where idUsuario= '".$_SESSION['id']."'";
            $q = $con -> Conecta($query);
            $_SESSION['correo'] = $correoN;
            echo "Se cambio el correo";
        }
        $con -> Desconecta();
    }
    ?>
<!DOCTYPE html>
 
<html>
 
    <head>
         <title>GYM :: Editar datos</title>
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
            <section id="us" style="height: 340px;">   
                <h2 id = "menu"> Bienvenido <?php echo $_SESSION['nombre'];?> </h2> 
                <h2>Fecha de ultimo pago: <?php echo $_SESSION['fechaP'];?></h2>
            
                <div id="menu"> 
                    <ul class="nav nav-tabs" role="tablist">
                            <li><a href="usuario_avisos.php">Avisos a nuestros usuarios</a></li>
                            <li class="active"><a href="#">Edita tus datos</a></li>
                            <li><a href="usuario_contrasena.php">Cambiar contraseña</a></li>
                            <li><a href="usuario_pagos.php">Realiza pagos</a></li>
                            <li><a id="Cerrar Sesión" href="../index.php">CERRAR SESIÓN</a></li>
                    </ul>
                </div>

                <div>
                   <form role="form" id="log" method="POST" action="usuario_actualizar.php">
                              <h4>Nombre</h4>
                                        <input type="text" placeholder="nombre" name ="nombre" id="nombre" value = <?php echo $_SESSION['nombre']?> >                           
                                        <h4>Correo</h4>
                                        <input type="text" placeholder="correo" name="correo" id = "correo" value = <?php echo $_SESSION['correo']?> >
                                        <br>
                                        <button type="submit" class="btn btn-default pull-right">Guardar</button>
                    </form>
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