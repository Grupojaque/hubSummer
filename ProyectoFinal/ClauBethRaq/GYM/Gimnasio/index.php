<?php
        $num = -1;
        $error = "";
            if(!empty($_POST)){ 
                session_start();
                include 'conexion.php';
                $correo = $_POST['correo'];
                $contrasena = $_POST['contrasena'];
                $con =  new conexion();
                $query = "select * from Usuarios where Correo="."'".$correo."'"." and Contrasena= "."'".$contrasena."'";
                $q = $con -> Conecta($query);
                $num = mysqli_num_rows($q);
 
                while($filas = mysqli_fetch_array($q)){
                        $id=$filas['idUsuario'];
                        $isAdmin = $filas['isAdmin'];
                        $nombre = $filas['NombreUsuario'];
                        $correo = $filas['Correo'];
                }                           
 
                $_SESSION['id'] = $id;
                $_SESSION['admin'] = $isAdmin;
                $_SESSION['nombre']=$nombre;
                $_SESSION['correo']=$correo;
                $query2 ='select * from Pagos where idUsuario ='."'".$id."' and fecha";
                $q = $con -> Conecta($query2);
 
                while($filas = mysqli_fetch_array($q)){
                        $fechaP=$filas['FechaPago'];
                        $intervalo = $filas['TiempoPago'];
                }   
 
                $_SESSION['fechaP']=$fechaP;
                $dias = "0";
                if ($intervalo == 0) {
                    $dias = "30";
                }else{
                    $dias = "365";
                }
 
                $query3 = 'select * from Pagos where CURDATE() <= DATE_ADD(FechaPago, INTERVAL'."'".$dias."' DAY) and idUsuario ="."'".$id."'";
                $q = $con -> Conecta($query3);
                $inter = mysqli_num_rows($q);
 
                if($isAdmin == "1"){
                    header('Location:administrador.php');      
                } else{
                    if($num == 0 ){
                        $error = "Fallo de autentificación. Introduce de nuevo tu usuario y contraseña";
                        echo $error;                    
                    }else{
                        if($inter == 0){
                            header('Location:./usuario/usuario_expiraPago.php');                    
                        }else{                  
                            header('Location:./usuario/usuario_avisos.php');                    
                        }
                    }
                }
                 
                $con -> Desconecta();
 
            }else {
            session_destroy();
            }
 
?>
<!DOCTYPE html>
 
<html>
 
    <head>
         <title>GYM :: Iniciar Sesión </title>
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

            </ul>
        </nav>
    </header>
 
    <body> 
    <section id="us">   
        <div class="panel panel-info" id="contenedor">
 
            <div class="panel-heading">
                <h3 class="panel-title">INGRESAR</h3>
            </div>
            <div class="panel-body">
                    <form role="form" id="log" method="POST" action="index.php">
                            <h4>Correo</h4>
                            <input type="text" class="form-control" placeholder="correo" name ="correo" id="correo">
                            <h4>Contraseña</h4>
                            <input type="password" class="form-control" placeholder="contraseña" name="contrasena" id = "contrasena">
                            <br>
                            <button type="submit" class="btn btn-default pull-right">Ingresar</button>
                      
                    </form>           
            </div>
            <p> SI NO TIENES UNA CUENTA <a href="registroUsuario.php"> ¡REGISTRATE AQUI!</a> </p>
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