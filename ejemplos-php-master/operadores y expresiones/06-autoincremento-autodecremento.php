<?php
	// Ejemplo de operadores y expresiones PHP - https://www.dinapyme.com
	// Autoincremento y autodecremento:  x++, x--, ++x, --x
	// En este ejemplo realizamos varias pruebas de autoincremento y autodecremento.
	
	$variable1 = 10;  // variable para los ejemeplos
	
	// Título
	echo "<center><h1>Autoincremento y Autodecremento</h1></center>";
	
	// mostrar el contenido inicial de la variable
	echo "Para empezar, \$variable1 contiene el valor: " . $variable1;
	echo "<br />";
	
	// Incrementar en 1 el valor de la variable
	$variable1++;
	echo "\$variable1++: " . $variable1;
	echo "<br />";
	
	// Decrementar en 1 el valor de la variable
	$variable1--;
	echo "\$variable1--: " . $variable1;

	// Prueba de realizar el autoincremento en la expresión (el autoincremento se realiza después).
	echo "<br />";
	echo "\$variable1++: " . $variable1++;  // No se muesta el incremento.
	echo "<br />Y ahora: " . $variable1;

	// Ahora utilizamos ++variable1 para que se realize el autoincremento antes de mostrarlo.
	echo "<br />";
	echo "++\$variable1: " . ++$variable1;
	
?>