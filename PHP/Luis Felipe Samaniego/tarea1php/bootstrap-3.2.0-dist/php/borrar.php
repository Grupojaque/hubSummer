 <?php

    

      $dp = mysql_connect('localhost','admin','admin')
          or die('No se pudo conectar:'. mysql_error());

        mysql_select_db("aplicaciones_web", $dp);

       $peticion= "DELETE FROM usuarios WHERE id= '{$_GET['id']}' ";
        

        //echo " hi   $peticion  ";
      
       $resultado = mysql_query($peticion);



       mysql_close($dp);
                 
       echo "<script>window.location = 'administrador.php' </script>";
         

        
?>