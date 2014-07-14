<?php include "cabecera.php" ?>

      <nav class="navbar navbar-inverse" role="navigation">
        ...
      </nav>


      <div class="jumbotron">
		  <h1>Login</h1>
		  <p>
		  		<form  action="logusuario.php" method="POST" class="navbar-form navbar-left" role="search">
				  <div class="form-group">
				   		<input type="text" name="usuario"	 class="form-control" placeholder="Username">
				   		<input type="text" name="contrasena" class="form-control" placeholder="Password">
				  </div>
				 	<button type="submit" class="btn btn-primary btn-lg" role="button">Submit</button>
				</form>

		  </p>

		  <p><br><br><a class="btn btn-default" role="button">Olvidaste tu contraseña</a></p>
	  </div>

<!--action="logusuario.php"-->
<?php include "pie.php" ?>


