<!DOCTYPE html>
<html>
<head>
  <title>Aplicación WEB</title>
<link href="../css/bootstrap.min.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>

	<div class="page-header">
  <h1>Example page header <small>Subtext for header</small></h1>
</div>

	<ul class="nav nav-tabs" role="tablist">
  <li class="active"><a href="#">Home</a></li>
  <li><a href="#">Profile</a></li>
  <li><a href="#">Messages</a></li>
	</ul>

<div class="panel panel-default">
  <div class="panel-body">
    Basic panel example
  </div>
</div>

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Panel heading</div>
  <div class="panel-body">
    <p> Usuarios de la base de datos registrada</p>
  </div>

  <!-- Table -->
  <table class="table">
    

<thead>
  <thead>
    <tr>
      <th>Nombre</th> <th>A. Paterno</th> <th>A. Materno</th> <th>Correo</th> <th>Sexo</th> <th>Edad</th> 
    </tr>
  </thead>


<tbody>
    <tr>
        <td>
            <?php
              $dp = mysql_connect('localhost','admin','admin')
                  or die('No se pudo conectar:'. mysql_error());

              mysql_select_db("aplicaciones_web", $dp);
              $sql= "SELECT * FROM usuarios";
              $resultado = mysql_query($sql);
              while ($row = mysql_fetch_assoc($resultado)) {
                  echo "$row[nombre]<br>"; 
              }

            mysql_close($dp);
            ?>
        </td>


      <td>
            <?php
              $dp = mysql_connect('localhost','admin','admin')
                  or die('No se pudo conectar:'. mysql_error());

              mysql_select_db("aplicaciones_web", $dp);
              $sql= "SELECT * FROM usuarios";
              $resultado = mysql_query($sql);
              while ($row = mysql_fetch_assoc($resultado)) {
                  echo "$row[a_paterno]<br>"; 
              }

            mysql_close($dp);
            ?>
      </td>

      <td>
            <?php
              $dp = mysql_connect('localhost','admin','admin')
                  or die('No se pudo conectar:'. mysql_error());

              mysql_select_db("aplicaciones_web", $dp);
              $sql= "SELECT * FROM usuarios";
              $resultado = mysql_query($sql);
              while ($row = mysql_fetch_assoc($resultado)) {
                  echo "$row[a_materno]<br>"; 
              }

            mysql_close($dp);
            ?>
      </td>

      <td>
            <?php
              $dp = mysql_connect('localhost','admin','admin')
                  or die('No se pudo conectar:'. mysql_error());

              mysql_select_db("aplicaciones_web", $dp);
              $sql= "SELECT * FROM usuarios";
              $resultado = mysql_query($sql);
              while ($row = mysql_fetch_assoc($resultado)) {
                  echo "$row[email]<br>"; 
              }

            mysql_close($dp);
            ?>
      </td>

      <td>
            <?php
              $dp = mysql_connect('localhost','admin','admin')
                  or die('No se pudo conectar:'. mysql_error());

              mysql_select_db("aplicaciones_web", $dp);
              $sql= "SELECT * FROM usuarios";
              $resultado = mysql_query($sql);
              while ($row = mysql_fetch_assoc($resultado)) {
                 // echo "$row[sexo]<br>"; 
                  if ($row[sexo]== 1) {
                        echo "Hombre <br>";
                    # code...
                      }
                  else{
                      echo "Mujer <br>";
                   }
              }

            mysql_close($dp);
            ?>
      </td>


      <td>
            <?php
              $dp = mysql_connect('localhost','admin','admin')
                  or die('No se pudo conectar:'. mysql_error());

              mysql_select_db("aplicaciones_web", $dp);
              $sql= "SELECT * FROM usuarios";
              $resultado = mysql_query($sql);
              while ($row = mysql_fetch_assoc($resultado)) {
                  //echo "$row[email]<br>"; 
                  $fecha = strtotime($row['f_nacimiento']);
                  $anios = $fecha / (60*60*24*365);
                  $anios = floor($anios); //floor redondea hacia abajo SIEMPRE
                  echo "$anios <br>"; 

              }

            mysql_close($dp);
            ?>
      </td>





    <!--      <td>
            <?php
        /*      $dp = mysql_connect('localhost','admin','admin')
                  or die('No se pudo conectar:'. mysql_error());

              mysql_select_db("aplicaciones_web", $dp);
              $sql= "SELECT * FROM usuarios";
              $resultado = mysql_query($sql);
              while ($row = mysql_fetch_assoc($resultado)) {

 
                    //$consulta = mysql_query("SELECT * FROM usuarios");
                    $consulta = mysql_query("SELECT f_nacimiento FROM usuarios");
                    $datos = mysql_fetch_array($consulta); 

                    // Obtener fecha de la bd y calcular edad 
                    $dia=date(j); 
                    $mes=date(n); 
                    $ano=date(Y); 

                    $nacimiento=explode("-",$datos["f_nacimiento"]); 
                    $dianac=$nacimiento[2]; 
                    $mesnac=$nacimiento[1]; 
                    $anonac=$nacimiento[0]; 
                /*    //si el mes es el mismo pero el día inferior aun no ha cumplido años, le quitaremos un año al actual 
                    if (($mesnac == $mes) && ($dianac > $dia)){ 
                    $ano=($ano-1);} 
                    //si el mes es superior al actual tampoco habrá cumplido años, por eso le quitamos un año al actual 
                    if ($mesnac > $mes){ 
                    $ano=($ano-1);} 
                    //ya no habría mas condiciones, ahora simplemente restamos los años y mostramos el resultado como su edad 
                    $edad=($ano-$anonac);

                    echo "$edad y  $anonac <br> "; 
              }

            mysql_close($dp); */
            ?>
      </td>   -->



    </tr>
</tbody>



  </table>
</div>

















<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>    