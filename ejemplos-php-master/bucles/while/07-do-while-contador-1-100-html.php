<?php
	// Ejemplo de Bucles en  PHP - https://www.dinapyme.com
	// Ejemplo sobre Operador Do While
	// Creamos un bucle con Do While hasta que el número sea 100.
	// Dentro del while incrementamos el valor del contador en 1. Se muestra el valor de $cotador en cada iteración.
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo While con HTML</title>
</head>
<body>
	<h1 style="text-align:center">Ejemplo Bucle While - Mostrar del 1 al 100</h1>

	<?php
			
		$contador = 1;  // Valor inicial para la variable $contador
		
		do {  // Mientras $contador sea menor o igual que 10
			echo $contador . "<br />";
			$contador++;
		}
		while ($contador <= 100);
	?>
</body>
</html>