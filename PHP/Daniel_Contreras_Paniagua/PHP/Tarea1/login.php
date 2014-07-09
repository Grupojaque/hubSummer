<?php
session_start();
// Check, if user is already login, then jump to secured page
if (isset($_SESSION['username'])) {
header('Location: main.php');
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title> Login Screen | Tarea 1</title>
    <meta name="description" content="Tarea 1, Conexión a base de datos" />
    <meta name="author" content="Contreras Paniaga Daniel" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="./login.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">

  </head>
  <body>
    <section class="header myheader">
      <header class="container-fluid" id="header1">
      <h1>Bienvenido</h1>
       <h3>Ingrese sus datos<h3>
      </header>
    </section>
    <section class="container">
    <form role="form" id="myForm" method="POST" action="logincheck.php">
        <div class="input-group"><span class="input-group-addon">Usuario</span>
          <input type="text" name="username" placeholder="Usuario" class="form-control">
        </div>
        <div class="input-group"><span class="input-group-addon">Contraseña</span>
          <input type="password"  name="pass" placeholder="Contraseña" class="form-control">
        </div>
        <button type="submit" class="btn btn-default pull-right">Enviar</button>
    </form>
   </section>

    <!--jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed-->
    <script src="./boostrap/js/bootstrap.min.js"></script>
  </body>
</html>