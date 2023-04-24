<?php
	// Ejemplo de Condicioales en  PHP - https://www.dinapyme.com
	// Ejemplo sobre IF	sin utilizar Else
	// Si $dia es igual a Sabado o Domingo, mostrar un mensaje.
	
	$dia = "Sabado";  // Asignar un día de la semana a la variable $dia
	
	if (($dia == "Sabado") || ($dia == "Domingo")){   // si el contenido de $edad es mayor o igual a 18 mostrará y menor o igual que 65.
		echo "Hoy es " . $dia . ". Por lo tanto es Fin de Semana!";
	}


?>