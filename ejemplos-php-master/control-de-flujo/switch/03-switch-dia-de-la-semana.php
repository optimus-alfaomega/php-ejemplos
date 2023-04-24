<?php
	// Ejemplo de Condicionales en  PHP - https://www.dinapyme.com
	// Ejemplo sobre el uso de Switch 
	// Comparación del día para saber qué día de la semana es.
	
	$dia = "Sábado";  //Variable que contiene el día que se evalulará en la expresión
	
	// switch en el que comprobamos el día que es hoy
	switch ($dia) {
		case "Lunes":
			echo "Hoy es Lunes.";
			break;
		case "Martes":
			echo "Hoy es Martes.";
			break;
		case "Miércoles":
			echo "Hoy es Miércoles.";
			break;
		case "Jueves":
			echo "Hoy es Jueves.";
			break;
		case "Viernes":
			echo "Hoy es Viernes.";
			break;
		case "Sábado":
			echo "Hoy es Sábado.";
			break;
		case "Domingo":
			echo "Hoy es Domingo.";
			break;
		default:
			echo "No se qué día es hoy.";
	}

?>