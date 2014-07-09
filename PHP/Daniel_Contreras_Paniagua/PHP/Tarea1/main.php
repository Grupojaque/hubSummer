<?php

    // Inialize session
    session_start();

    // Check, if username session is NOT set then this page will jump to login page
    if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    }

?>
<?php
    $title = "Base de datos, bienvenido";
    $contentHeader = 'Usuario activo: ' . $_SESSION['username'];

    include "header.php";
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
    <?php
        // Include database connection settings
        include('conexion.php');
        $nombrecomp = mysql_query("SELECT nombre,a_paterno,a_materno FROM usuarios WHERE (username = '" . mysql_real_escape_string($_SESSION['username']) . "') ");
        $row1=mysql_fetch_assoc($nombrecomp);
        $nombre=$row1['nombre'];
        $paterno=$row1['a_paterno'];
        $materno=$row1['a_materno'];
    ?>
    <section class="header myheader">
      <header class="container-fluid" id="header1">
        <h1>Bienvenido</h1>
        <h3> <?php echo $nombre . ' ' . $paterno . ' ' . $materno . '!'  ?></h3>
        <p><a href="logout.php">Logout</a></p>
      </header>
    </section>
      <section class="container">
        <?php
            // Include database connection settings
            include('conexion.php');
             echo '<table class="table table-hover">', '<thead><tr><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th><th>email</th><th>Sexo</th><th>Edad</th></tr></thead>', '<tbody>';
            
            $myQuery = mysql_query("SELECT * FROM usuarios");

            while ($row = mysql_fetch_assoc($myQuery)) {
              $sexo = ($row['sexo']==1) ? Masculino : Femenino;
              $birthDate = explode("-", $row['f_nacimiento']);
              $edad = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("dm")
                ? ((date("Y") - $birthDate[0]) - 1)
                : (date("Y") - $birthDate[0]));
              $nombre=ucfirst($row['nombre']);
              $paterno=ucfirst($row['a_paterno']);
              $materno=ucfirst($row['a_materno']);
              echo "<tr> 
                    <td>$nombre</td>
                    <td>$paterno</td>
                    <td>$materno</td>
                    <td>{$row['email']}</td>
                    <td>$sexo</td>
                    <td>$edad</td>

                  </tr>";
            }
            echo '</tbody></table>';

        ?>
      </section>
     


      <!--jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed-->
      <script src="./boostrap/js/bootstrap.min.js"></script>
    </body>
</html>