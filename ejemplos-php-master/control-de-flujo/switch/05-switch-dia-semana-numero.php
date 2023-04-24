<?php
	// Ejemplo de Condicionales en  PHP - https://www.dinapyme.com
	// Ejemplo sobre el uso de Switch
	// Comparación de los números del 1 al 7 para indicar el día de la semana al que corresponde.
		
	$dia = 5;  // variable que contiene el día de la semana a comprobar
	
	// Switch en el que comprobamos el día de la semana al que corresponde el número de $dia.
	switch ($dia) {
		case 1:
			echo "Hoy es Lunes";
			break;
		case 2:
			echo "Hoy es Martes";
			break;
		case 3:
			echo "Hoy es Miércoles";
			break;
		case 4:
			echo "Hoy es Jueves";
			break;
		case 5:
			echo "Hoy es Viernes";
			break;
		case 6:
			echo "Hoy es Sábado";
			break;
		case 7:
			echo "Hoy es Domingo";
			break;
		default:   // para el caso que no coincida con ningún número
			echo "No se que día es hoy";
			break;
	}
?>