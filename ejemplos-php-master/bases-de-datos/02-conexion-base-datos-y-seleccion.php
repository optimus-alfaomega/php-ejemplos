<?php
	// Ejemplo de bases de datos en  PHP - https://www.dinapyme.com
	// Ejemplo sobre Conexión de base de datos mysql
	
	$conexion = mysql_connect( "localhost", "osccar", "contrasena) or die ("No se pudo conectar al servidor");
	
	$db = mysql_select_db("php01", $conexion) or die ("No se ha podido seleccionar la base de datos");
	
?>