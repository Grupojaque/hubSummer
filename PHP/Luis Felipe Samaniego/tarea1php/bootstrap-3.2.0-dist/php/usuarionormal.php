<?php include "cabecera.php" ?>

      <nav class="navbar navbar-inverse" role="navigation">
        <a href="login.php" id="logout" class="btn btn-default" role="button">Logout</a>
      </nav>

<div class="jumbotron" id="div1">

  <h3>Usuario</h3>

  <?php echo "hola" . $_POST["usuario"];?>

  <table class="table">  

  <thead id="tabla1">
      <tr>
      <th>Nombre</th> <th>A. Paterno</th> <th>A. Materno</th> <th>Correo</th> <th>Sexo</th> <th>Edad</th> 
      </tr>
  </thead>

  <tbody id="tabla3">
    
        
            <?php
              $dp = mysql_connect('localhost','admin','admin')
                  or die('No se pudo conectar:'. mysql_error());

              mysql_select_db("aplicaciones_web", $dp);
              $sql= "SELECT * FROM usuarios";
              $resultado = mysql_query($sql);
              while ($row = mysql_fetch_assoc($resultado)) {

                  if ($row[sexo]== 1) {
                        $sex = "Hombre";
                      }
                  else{
                      $sex= "Mujer";
                      }

                  /*if ($row[id]== 1) {
                        $sex = "Hombre";
                      }*/




                  $fecha = strtotime($row['f_nacimiento']);
                  $anios = $fecha / (60*60*24*365);
                  $anios = floor($anios); //floor redondea hacia abajo SIEMPRE  

                  $id1=$row[id];

                  echo "<tr>  <td>$row[nombre]</td>  <td>$row[a_paterno]</td>  <td>$row[a_materno]</td>  <td>$row[email]</td>  <td>$sex</td>  <td>$anios</td>  </tr>"; 
              }


                  /*echo "<tr>  <td>$row[nombre]</td>  <td>$row[a_paterno]</td>  <td>$row[a_materno]</td>  <td>$row[email]</td>  <td>$sex</td>  <td>$anios</td> <td>$id</td>" . '<td> <a href ="editar.php?id='.$row[id].'" class="boton1" id='.$row[id].'> <button> editar </button> </a> </td>' . '<td> <a href ="borrar.php?id='.$row[id].'" class="boton" id='.$row[id].'> <button> borrar </button> </a> </td>  </tr>'; */



            mysql_close($dp);

            ?>

  </tbody>
  </table>


<a id="agregar" href="agregarnormal.php" class="btn btn-default" role="button">AGREGAR</a>

</div>

<?php include "pie.php" ?>