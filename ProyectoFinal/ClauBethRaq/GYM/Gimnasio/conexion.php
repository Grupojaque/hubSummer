<?php
define('DB_SERVER', '');
define('DB_NAME', '');
define('DB_USER', '');
define('DB_PASS', '');

/**
* 
*/
class conexion
{
 	public $con;
 	public $registros;
 	public $msj="";
	
	function __construct()
	{
	}
/*Realiza conexión y la consulta*/
	function Conecta($query){

		$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
		if(mysqli_connect_errno()){
			$msj ="Hubo un error de conexion";
			echo $msj;
			$msj = "";
		}else{
			$q = mysqli_query($con, $query);	
			$num = mysqli_num_rows($q);
			if ($num != 0){
				return $q;				
			}
			else{
				$msj= "No existen registros con tal contraseña y usario.Vuelve a intentarlo";
			}
		}
	}

	function getRegistro()
	{
		return $registros;
	}

	function getMsj()
	{
		return $msj;
	}

	function Desconecta()
	{
		mysql_close($conexion);
	}

}


?>
