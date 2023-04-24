<?php
	// Ejemplo de Bucles en  PHP - https://www.dinapyme.com
	// Ejemplo sobre FOR
	// Crear y mostra la tabla de multiplicar del número 5 con HTML.
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tabla de multiplicar del 5</title>
	<meta charset="utf-8">
</head>
<body>
	<h1 style="text-align:center">Tabla de multiplicar del 5</h1>
	
	<?php	
		for ($contador = 1; $contador <= 10; $contador++){
			echo "5 x " . $contador . " = " . ($contador * 5) . "<br />";
		}	
	?>
	
</body>
</html>