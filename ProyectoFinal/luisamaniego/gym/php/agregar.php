<?php include "cabecera.php" ?>

      <nav class="navbar navbar-inverse" role="navigation">
        ...
      </nav>

      <div class="jumbotron" id ="div2">
		  <h2>Agregar Usuario</h2>
		  <p>
		  		<form action="insertar.php" method="POST" class="navbar-form navbar-left" role="search">
				  <div class="form-group">
						
						<input type="text" name="usuario"	 class="form-control" placeholder="Usuario">
				   		<input type="text" name="contrasena" class="form-control" placeholder="Contraseña">
						<input type="text" name="nombre"	 class="form-control" placeholder="Nombre">
				   		<input type="text" name="paterno" class="form-control" placeholder="A. Paterno">
				   		<input type="text" name="materno"	 class="form-control" placeholder="A. Materno">
				   		<input type="text" name="correo"	 class="form-control" placeholder="e-mail">
				   		<input type="text" name="sexo" class="form-control" placeholder="Sexo, 0:Fem  1 = Masc ">
				   		<input type="text" name="edad"	 class="feche" placeholder="Fecha de Nacimiento">
				   		<input type="text" name="adminnormal" class="form-control" placeholder="1:admin 0:Normal">
				  </div>

				 	<button type="submit" class="btn btn-primary btn-lg" role="button">Submit</button>
				</form>
		  </p>

			<a href="administrador.php" id="noagregar" class="btn btn-default" role="button">No agregar</a>
	  </div>


<?php include "pie.php" ?>