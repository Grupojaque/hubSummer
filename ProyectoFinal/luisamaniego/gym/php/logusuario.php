 <?php

      $contador=0;

      $dp = mysql_connect('localhost','admin','admin')
          or die('No se pudo conectar:'. mysql_error());

        mysql_select_db("aplicaciones_web", $dp);

       $peticion= "SELECT * FROM usuarios WHERE username = '{$_POST['usuario']}' AND  pass = '{$_POST['contrasena']}' AND admin = '1'    ";
    
        $peticion1= "SELECT * FROM usuarios WHERE username = '{$_POST['usuario']}' AND  pass = '{$_POST['contrasena']}' AND admin = '0'    ";
    

        //echo " hi   $peticion  ";
      
        $resultado = mysql_query($peticion);

        $resultado1 = mysql_query($peticion1);

        while ($row = mysql_fetch_assoc($resultado)) {
                  $contador++;

              }

        while ($row = mysql_fetch_assoc($resultado1)) {
                  $contador1++;

              }


        if ($contador>0) {
                 
            echo "<script>window.location = 'administrador.php' </script>";
         
          }


        if ($contador1>0) {

            echo "<script>window.location = 'usuarionormal.php' </script>";
            
          }

         else{
          
          echo "<script>window.location = 'usuarionoexiste.php' </script>";

        }

        mysql_close($dp);
?>