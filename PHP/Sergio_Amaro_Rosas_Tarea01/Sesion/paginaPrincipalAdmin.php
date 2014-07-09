<?php
$title = "Bienvenido";
$contentHeader = "Muestra los registros de la base de datos";
?>

<!DOCTYPE html>
<html>

<head>
		<!-- Bootstrap -->
		<link href="../Bootstrap/bootstrap.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" type="text/css" href="/php/Tareas/CSS/sesion.css">
		<link rel="stylesheet" type="text/css" href="/php/Tareas/CSS/paginaPrincipal.css">
				
</head>
	
	<body>
		<section class="header myheader" id="content">
      <header class="container  headp">
        <h1><?php echo $title;?></h1>
        <p>
          <?php echo $contentHeader; ?>
        </p>

      </header>
      <section id = "botones">
  			<form type="submit" action="cerrarSesion.php">
  				<button  type="submit" class="btn btn-link cerrar" >Cerrar Sesion</button>
  			</form>
    </section>
    </section>
    <section class="col-md-9 well tabla	">
          <?php
            include "../BaseDatos/connection.php";
            $myObject = new Connection();
            $myObject -> consultaAdmin("select * from usuarios");
          ?>
        </section>
	</body>
</html>
