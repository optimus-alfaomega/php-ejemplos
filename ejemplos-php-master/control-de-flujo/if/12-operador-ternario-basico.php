<?php
	// Ejemplo de Condicionales en  PHP - https://www.dinapyme.com
	// Ejemplo sobre Operador Ternario (?)
	// Mostrar un texto si es Viernes y otro texto si no lo es.
	
	$dia = "Martes";  // Asignar el valor Viernes a la variable $dia.

	// Comprobar si es Viernes. Si es viernes, motrar "Por fin es viernes", sino, mostrar el otro mensaje.
	$mensaje = ($dia == "Viernes") ? "Por fin es Viernes" : "Hoy no es Viernes. Tranquilo/a, ya llegará...";

	echo $mensaje;
?>