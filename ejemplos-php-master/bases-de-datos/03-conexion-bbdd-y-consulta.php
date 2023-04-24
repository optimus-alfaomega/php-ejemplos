<?php
	// Ejemplo de bases de datos en  PHP - https://www.dinapyme.com
	// Ejemplo sobre Conexión de base de datos mysql y consulta
	
	$conexion = mysql_connect( "localhost", "osccar", "contrasena") or die ("No se pudo conectar al servidor");
	
	$db = mysql_select_db("php01", $conexion) or die ("No se ha podido seleccionar la base de datos");
	
	$query = "SELECT * FROM frutas";
	
	$resultado = mysql_query($query) or die ("Fallo en la consulta: " . mysql_error());
	
	
?>