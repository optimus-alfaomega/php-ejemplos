<?php
	// Ejemplo de bases de datos en  PHP - https://www.dinapyme.com
	// Ejemplo de creación de base de datos desde php
	
	// Conectar con servidor de base de datos	
	$conexion = mysql_connect( "localhost", "osccar", "contrasena") or die ("No se pudo conectar al servidor");
	
	$consulta = "CREATE DATABASE IF NOT EXISTS alimentos";
	
	$resultado = mysql_query($consulta) or die ("La consulta falló: " . mysql_error());
	
	$db = mysql_select_db("alimentos", $conexion) or die ("No se ha podido seleccionar la base de datos");
	
	$consulta = "CREATE TABLE IF NOT EXISTS comida (nombre VARCHAR(20), cantidad VARCHAR(20))";  // Crear tabla con 2 campos
	
	$resultado = mysql_query($consulta) or die ("Fallo en la consulta: " . mysql_error());
	
	// Insertar datos
	$consulta = "INSERT INTO comida (nombre, cantidad) VALUES ('hamburguesas, '222'";
	
	$resultado = mysql_query($consulta) or die ("Fallo en la consulta: " . mysql_error());
	
	
?>