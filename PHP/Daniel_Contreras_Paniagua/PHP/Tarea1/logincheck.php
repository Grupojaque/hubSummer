
<?php

// Inialize session
session_start();
// Include database connection settings
include('conexion.php');
// Retrieve username and password from database according to user's input
$login = mysql_query("SELECT * FROM usuarios WHERE (username = '" . mysql_real_escape_string($_POST['username']) . "') and (pass = '" . mysql_real_escape_string($_POST['pass']) . "')");

// Check username and password match
if (mysql_num_rows($login) == 1) {
	// Set username session variable
	$_SESSION['username'] = $_POST['username'];
	// Jump to secured page
	header('Location: main.php');
}
else {
	// Jump to login page
	header('Location: login.php');
}
?>