<?php
	// Ejemplo de Funciones en  PHP - https://www.dinapyme.com
	// Cálculo de la media de 2 números con una función y muestra por pantalla.
	
	// Creción de función para el cálculo de la media de dos números.
	function media ($numero1, $numero2) {
		$total = ($numero1 + $numero2) / 2;
		return $total;
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo de funciones en PHP - Cálculo de media de 2 números</title>
	<meta charset="utf-8">
</head>

<body>
	<h1 style="text-align: center;">Cálculo de la media de 2 números</h1>
	<?php
		echo "<br />";
		echo "La media de los números 4 y 19 es: ";
		$total = media(4, 10);  // Llamada a la función con paso de dos parámetros
		echo $total;  // Mostrar la media
		
	?>
</body>
</html>