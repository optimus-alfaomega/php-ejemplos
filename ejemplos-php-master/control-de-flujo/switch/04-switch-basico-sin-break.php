<?php
	// Ejemplo de Condicionales en  PHP - https://www.dinapyme.com
	// Ejemplo sobre el uso de Switch sin break
	// Comparación de varios números para mostrar por pantalla si uno de los tres números del switch u otro diferente.
	// En este ejemplo no utilizamos break para ver cual sería el resultado si no lo usamos.
	
	$numero = 2;
	
	switch ($numero) {
		case 1:
			echo "El número es 1<br />";
		case 2:
			echo "El número es 2<br />";
		case 3:
			echo "El número es 3<br />";
		default:
			echo "El número es diferente a 1, 2 o 3";
	}

?>