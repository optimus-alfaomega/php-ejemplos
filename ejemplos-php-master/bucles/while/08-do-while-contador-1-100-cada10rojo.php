<?php
	// Ejemplo de Bucles en  PHP - https://www.dinapyme.com
	// Ejemplo sobre Operador Do While
	// Creamos un bucle con Do While hasta que el número sea 100.
	// Dentro del while incrementamos el valor del contador en 1. el 5 lo mostrará en rojo.
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo Do While con HTML</title>
</head>
<body>
	<h1 style="text-align:center">Ejemplo Bucle Do While - Mostrar del 1 al 100</h1>

	<?php
			
		$contador = 1;  // Valor inicial para la variable $contador
		
		do {  // Mientras $contador sea menor o igual que 100
			if (($contador) == 5){  // Si es 5 se muesra en rojo
				echo "<span style='color: red;'>" . $contador . "</span><br />";
			} else {
				echo $contador . "<br />";
			}
			
			$contador++;
		}
		while ($contador <= 100);
	?>
</body>
</html>