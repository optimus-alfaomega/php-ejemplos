<?php
	// Ejemplo de bases de datos en  PHP - https://www.dinapyme.com
	// Ejemplo sobre Conexión de base de datos mysql y consulta
?>

<!DOCTYPE html>

<html>
<head>
	<title>Conexión BBDD y muestra de tabla</title>
	<meta charset="utf-8">
</head>	

<body>
	<h1>Mostrar tablas con MySQL</h1>
	<?php
		$conexion = mysql_connect( "localhost", "osccar", "contrasena") or die ("No se pudo conectar al servidor");
		
		$db = mysql_select_db("php01", $conexion) or die ("No se ha podido seleccionar la base de datos");
		
		$query = "SELECT * FROM frutas";
		
		$resultado = mysql_query($query) or die ("Fallo en la consulta: " . mysql_error());
		
		echo "<table border='1'>";
		echo "<tr>";
		echo "<th>Nombre</th><th>Numero</th>";
		echo "</tr>";
		
		while ($row = mysql_fetch_array($resultado))
		{
			echo "<tr>";
			echo "<td>", $row['Nombre'], "</td><td>", $row['Numero'], "</td>";
			echo "</tr>";
		}
		
		echo "</table>";
		mysql_close($conexion);
	?>
</body>
</html>