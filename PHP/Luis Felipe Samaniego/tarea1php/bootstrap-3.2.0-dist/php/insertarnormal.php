 <?php

      $contador=0;

      $dp = mysql_connect('localhost','admin','admin')
          or die('No se pudo conectar:'. mysql_error());

        mysql_select_db("aplicaciones_web", $dp);

       $peticion= "INSERT INTO usuarios() values ('null', '{$_POST['usuario']}', '{$_POST['contrasena']}', '0', '{$_POST['correo']}', '{$_POST['nombre']}', '{$_POST['paterno']}', '{$_POST['materno']}', '{$_POST['sexo']}', '{$_POST['edad']}')   ";
    

        //echo " hi   $peticion  ";
      
        $resultado = mysql_query($peticion);


          mysql_close($dp);
                 
        echo "<script>window.location = 'usuarionormal.php' </script>";
              
?>