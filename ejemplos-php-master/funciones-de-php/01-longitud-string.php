<?php
	// Ejemplo de funciones en  PHP - https://www.dinapyme.com
	// Ejemplo sobre la función "STRLEN()"
	// Calcular la lingitud de 3 cadenas creadas en dos variables y una cadena de texto.

	$cadena1 = "Primera cadena de texto";
	$cadena2 = "A ver si adivinas cuántos caracteres tiene esta cadena...";
	
	echo "<h1 style='text-align:center'>Función STRLEN() - Longitud de cadenas</h1>";
	
	echo "Cadena 1: $cadena1 <br />";
	echo "Longitud Cadena 1: " . strlen($cadena1) . "<br /><br/>";
	
	echo "Cadena 2: $cadena2 <br />";
	echo "Longitud Cadena 2: " . strlen($cadena2) . "<br /><br />";
	
	echo "Cadena 3: Última cadena de texto.<br />";
	echo "Longitud Cadena 3: " . strlen("Última cadena de texto.");
?>