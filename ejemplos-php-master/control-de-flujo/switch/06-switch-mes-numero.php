<?php
	// Ejemplo de Condicionales en  PHP - https://www.dinapyme.com
	// Ejemplo sobre el uso de Switch
	// Comparación de los números del 1 al 12 para indicar el mes al que corresponde.
		
	$mes = 11;  // variable que contiene el mes a comprobar
	
	// Switch en el que comprobamos el mes al que corresponde el número de $mes.
	switch ($mes) {
		case 1:
			echo "El mes es Enero";
			break;
		case 2:
			echo "El mes es Febrero";
			break;
		case 3:
			echo "El mes es Marzo";
			break;
		case 4:
			echo "El mes es Abril";
			break;
		case 5:
			echo "El mes es Mayo";
			break;
		case 6:
			echo "El mes es Junio";
			break;
		case 7:
			echo "El mes es Julio";
			break;
		case 8:
			echo "El mes es Agosto";
			break;
		case 9:
			echo "El mes es Septiembre";
			break;
		case 10:
			echo "El mes es Octubre";
			break;
		case 11:
			echo "El mes es Noviembre";
			break;
		case 12:
			echo "El mes es Diciembre";
			break;
		default:   // para el caso que no coincida con ningún número
			echo "No se que mes es";
			break;
	}
?>