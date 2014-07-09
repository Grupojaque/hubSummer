<?php

define('DB_SERVER', 'localhost');
define('DB_NAME', 'aplicaciones_web');
define('DB_USER', 'root');
define('DB_PASS', 'Daniel-0694');

// Let's connect to host
mysql_connect(DB_SERVER, DB_USER, DB_PASS) or die("Nope, falló la conexión con el host");
// Select the database
mysql_select_db(DB_NAME) or die("Nope, falló la conexión con la DB");

?>