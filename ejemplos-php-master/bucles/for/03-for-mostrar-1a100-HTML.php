<?php
	// Ejemplo de Bucles en  PHP - https://www.dinapyme.com
	// Ejemplo sobre FOR
	// Creamos un bucle con For para mostrar por pantalla del 1 al 100. Con HTML
?>

<!DOCTYPE html>
<html>
<head>
	<title>Bucle For - Mostrar del 1 al 100</title>
	<meta charset="utf-8">
</head>
<body>
	<h1 style="text-align:center">Bucle For - Mostrar del 1 al 100</h1>
	<?php	
		for ($contador = 1; $contador <=100; $contador++){
			echo $contador . "<br />";
		}
	?>
</body>
</html>