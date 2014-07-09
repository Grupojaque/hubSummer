<?php
//Define una constante con nombre en tiempo de ejecución.
define('DB_SERVER', 'localhost');
define('DB_NAME', 'aplicaciones_web');
define('DB_USER', 'root');
define('DB_PASS', 'theblackkeys1992');
/*
 define('DB_SERVER','localhost'); //case sensitive
 define('DB_SERVER','localhost',true); //no case sensitive
 */

class Connection {
	/**
	 * definimos los datos para la conexion
	 */
	private $conect;
	private $sqlScript;

	/**
	 * Constructor
	 */
	function Connection($userScript) {

		$this -> sqlScript = $userScript;
	}

	public function consultaAdmin($consulta){
		//definimos la conexion a mysql a realizar
		$connect = mysql_connect(DB_SERVER, DB_USER, DB_PASS);
		//prueba de conexion
		 if (!$connect) {
		 die('<strong>No pudo conectarse:</strong> ' . mysql_error());
		 
		 } else {

		 //La siguiente linea no es necesaria al momento de programar, simplemente la pondremos ahora
		 // para poder observar que la conexion ha sido realizada
		 echo 'Conectado  satisfactoriamente al servidor <br />';
		 
		 }

		/*
		 * En la siguiente linea seleccionaremos la BD con la que trabajaremos y le pasaremos como referencia
		 * la conexion al servidor
		 * Para saber si se conecto o no a la BD podriamos utilizar el IF de la misma forma que lo utilizamos
		 * al momento de conectar al servidor, pero les muestro otra forma de comprobar eso,
		 * es codigo mas corto.
		 */

		echo '<table class="table table-hover">', '<thead><tr><th>ID</th><th>Nombre Completo</th><th>Username</th><th>Fecha Nacimiento</th><th>Correo</th><th>Sexo</th></tr></thead>', '<tbody>';
		
		//comentar la siguiente linea al usar mysqli o PDO
		mysql_select_db(DB_NAME, $connect) or die(mysql_error($connect));

		$edit = '<button  class="btn btn-link editar" >Editar</button>';
		$myQuery = mysql_query($consulta, $connect);
			while ($row = mysql_fetch_assoc($myQuery)){
			echo "<tr>	<td>{$row['id']}</td>
						<td>{$row['nombre']} {$row['a_paterno']} {$row['a_materno']}</td>
						<td>{$row['username']}</td>
						<td>{$row['f_nacimiento']}</td>
						<td>{$row['email']}</td>
						<td>{$row['sexo']}</td>
						<td>$edit</td>
				  </tr>";

			}
			echo '</tbody></table>';
		
		//Luego de abrir y utilizar una conexi�n en MySql siempre hay que cerrarla luego de terminar de trabajar con ella
		mysql_close($connect);

	}

	/**
	 * Metodo mediante el cual realizamos una consulta
	 */
	public function consulta($consulta) {
		//definimos la conexion a mysql a realizar
		$connect = mysql_connect(DB_SERVER, DB_USER, DB_PASS);
		//prueba de conexion
		 if (!$connect) {
		 die('<strong>No pudo conectarse:</strong> ' . mysql_error());
		 
		 } else {

		 //La siguiente linea no es necesaria al momento de programar, simplemente la pondremos ahora
		 // para poder observar que la conexion ha sido realizada
		 echo 'Conectado  satisfactoriamente al servidor <br />';
		 
		 }

		/*
		 * En la siguiente linea seleccionaremos la BD con la que trabajaremos y le pasaremos como referencia
		 * la conexion al servidor
		 * Para saber si se conecto o no a la BD podriamos utilizar el IF de la misma forma que lo utilizamos
		 * al momento de conectar al servidor, pero les muestro otra forma de comprobar eso,
		 * es codigo mas corto.
		 */

		echo '<table class="table table-hover">', '<thead><tr><th>ID</th><th>Nombre Completo</th><th>Username</th><th>Fecha Nacimiento</th><th>Correo</th><th>Sexo</th></tr></thead>', '<tbody>';
		
		//comentar la siguiente linea al usar mysqli o PDO
		mysql_select_db(DB_NAME, $connect) or die(mysql_error($connect));

		$myQuery = mysql_query($consulta, $connect);
			while ($row = mysql_fetch_assoc($myQuery)){
			echo "<tr>	<td>{$row['id']}</td>
						<td>{$row['nombre'] } {$row['a_paterno']} {$row['a_materno']}</td>
						<td>{$row['username']}</td>
						<td>{$row['f_nacimiento']}</td>
						<td>{$row['email']}</td>
						<td>{$row['sexo']}

				  </tr>","";

			}
			echo '</tbody></table>';
		
		//Luego de abrir y utilizar una conexi�n en MySql siempre hay que cerrarla luego de terminar de trabajar con ella
		mysql_close($connect);
	}

}
