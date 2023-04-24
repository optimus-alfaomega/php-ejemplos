<?php
	// Ejemplo de Condicionales en  PHP - https://www.dinapyme.com
	// Ejemplo sobre el uso de Switch con default
	// Comparación de varios números para mostrar por pantalla si uno de los tres números del switch u otro diferente.
	
	$numero = 7;
	
	switch ($numero) {
		case 1:
			echo "El número es 1";
			break;
		case 2:
			echo "El número es 2";
			break;
		case 3:
			echo "El número es 3";
			break;
		default:
			echo "El número es diferente a 1, 2 o 3";
	}

?>