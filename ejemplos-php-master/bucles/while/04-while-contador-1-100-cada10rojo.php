<?php
	// Ejemplo de Bucles en  PHP - https://www.dinapyme.com
	// Ejemplo sobre Operador While
	// Creamos un bucle con While hasta que el número sea 100.
	// Dentro del while incrementamos el valor del contador en 1. el 5 lo mostrará en rojo.
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
		
		while ($contador <= 100) {  // Mientras $contador sea menor o igual que 100
			if (($contador) == 5){  // Si es 5 se muesra en rojo
				echo "<span style='color: red;'>" . $contador . "</span><br />";
			} else {
				echo $contador . "<br />";
			}
			
			$contador++;
		}	
	?>
</body>
</html>