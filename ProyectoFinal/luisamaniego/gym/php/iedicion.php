 <?php

    //echo "{$_GET['id']}";

     $dp = mysql_connect('localhost','admin','admin')
          or die('No se pudo conectar:'. mysql_error());

        mysql_select_db("aplicaciones_web", $dp);

       $peticion= "UPDATE usuarios SET   id= '{$_GET['id']}', username = '{$_POST['usuario']}', pass = '{$_POST['contrasena']}', admin ='{$_POST['adminnormal']}', email ='{$_POST['correo']}', nombre ='{$_POST['nombre']}', a_paterno ='{$_POST['paterno']}', a_materno = '{$_POST['materno']}', sexo ='{$_POST['sexo']}', f_nacimiento ='{$_POST['edad']}' WHERE id= '{$_GET['id']}' ";
        
        //echo " hi   $peticion  ";
      
       $resultado = mysql_query($peticion);



       mysql_close($dp); 
                 
       echo "<script>window.location = 'administrador.php' </script>";
         
?>
        
