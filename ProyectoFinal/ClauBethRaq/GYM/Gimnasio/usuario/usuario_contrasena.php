<?php
    session_start();

        if(!empty($_POST)){         
        
            include '../conexion.php'; 
            $con = new conexion();

            $pass = $_POST['conActual'];
            $passN = $_POST['conN'];
            $passN2 = $_POST['conN2'];

            $query = "select * from Usuarios where idUsuario = '".$_SESSION['id']."' and  Contrasena= '".$pass."'";
            $q = $con -> Conecta($query);
            $num = mysqli_num_rows($q);
            if($num == 0 ){
                echo "Contraseña actual erronea. Vuelve a intentarlo.";
            }else {
                if($passN != $passN2){
                    echo "La contraseña nueva y la confirmación no coninciden. Vuelve a intentarlo";
                }else{
                    $query = "update Usuarios set Contrasena = '".$passN."' where idUsuario = '".$_SESSION['id']."'";
                    $q = $con -> Conecta($query);
                    echo "Se cambio la contraseña exitosamente.";

                }

            }

        $con -> Desconecta();
    }
?>
<!DOCTYPE html>
 
<html>
 
    <head>
         <title>GYM :: Cambiar contraseña</title>
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
            <section id="us" style="height: 460px;">   
                <h2 id = "menu"> Bienvenido <?php echo $_SESSION['nombre'];?> </h2> 
                <h2>Fecha de ultimo pago: <?php echo $_SESSION['fechaP'];?></h2>
            
                <div id="menu"> 
                    <ul class="nav nav-tabs" role="tablist">
                            <li><a href="usuario_avisos.php">Avisos a nuestros usuarios</a></li>
                            <li><a href="usuario_actualizar.php">Edita tus datos</a></li>
                            <li class= "active"><a href="usuario_contrasena.php">Cambiar contraseña</a></li>
                            <li><a href="usuario_pagos.php">Realiza pagos</a></li>
                            <li><a id="Cerrar Sesión" href="../index.php">CERRAR SESIÓN</a></li>
                    </ul>
                </div>

                <div>
        <form role="form" id="log" method="POST" action="usuario_contrasena.php">
                            
                            <h3>Cambio de contraseña.</h3>
                            <p>La contraseña debe contener 9 digitos.</p>
                            <h4>Ingresa tu actual contraseña</h4>
                            <input type="password" placeholder="contraseña actual" name="conActual" id = "conActual">
                            <h4>Ingresa nueva contraseña</h4>
                            <input type="password" placeholder=" nueva contraseña" name="conN" id = "conN">
                            <h4>Confirma nueva contraseña</h4>
                            <input type="password" placeholder=" confirma contraseña" name="conN2" id = "conN2">
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