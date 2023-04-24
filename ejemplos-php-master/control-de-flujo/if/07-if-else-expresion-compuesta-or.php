<?php
	// Ejemplo de Condicioales en  PHP - https://www.dinapyme.com
	// Ejemplo sobre IF	y Else
	// Mostrar un mensaje si es fin de semana y otro si no lo es.
	
	$dia = "Martes";  // Asignar el valor Viernes a la variable $dia.

	if (($dia == "Sabado") || ($dia == "Domingo")) {    //Comprobar si el valor de $dia es igual a Sabado ó Domingo
		echo "Es fin de semana!";   // Mostrar si es fin de semana
	} else {
		echo "Todavía no es fin de semana. Ya llegará...";   // Mostrar si no es fin de semana
	}

?>