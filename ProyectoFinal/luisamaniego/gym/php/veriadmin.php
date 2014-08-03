<?php

session_start();

if (isset($_POST[usuario]) && isset($_POST[contrasena]) && isset($_POST[admin])) {
  echo "<script>window.location = 'administrador.php' </script>";
}
else{
  echo "<script>window.location = 'login.php' </script>";
}

?>

