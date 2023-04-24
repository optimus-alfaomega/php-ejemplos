<?php
	// Ejemplo de operadores y expresiones PHP - https://www.dinapyme.com
	// Operadores de asignación combinados: +=, -=, /=, *=, %=, .=
	// En este ejemplo creamos una variable, les asignamos un valor.
	// Posteriormente utilizamos los diferentes operadores de asingación combinados para realizar las operciones o mostra los resultados.
	
		
	$total = 10;  // Variable que utilizaremos en todos los ejemplos.
	
	// Título para la página web
	echo "</center><h1>Ejemplos Operadores de Asignación Combinados</h1></center>";
	echo "<br />";
	
	// Operador +=
	echo "\$total += 3 es " . $total += 3 . ".";  // $total = $total + 3
	echo "<br />";   // Espacio
	$total = 10;  // volvemos a asignar 10 a la variable
	
	// Operador -=
	echo "\$total -= 3 es " . $total -= 3 . ".";  // $total = $total + 3
	echo "<br />";   // Espacio
	$total = 10;  // volvemos a asignar 10 a la variable

	// Operador /=
	echo "\$total /= 3 es " . $total /= 3 . ".";  // $total = $total / 3
	echo "<br />";   // Espacio
	$total = 10;  // volvemos a asignar 10 a la variable

	// Operador *=
	echo "\$total *= 3 es " . $total *= 3 . ".";  // $total = $total * 3
	echo "<br />";   // Espacio
	$total = 10;  // volvemos a asignar 10 a la variable

	// Operador %=
	echo "\$total %= 3 es " . $total %= 3 . ".";  // $total = $total % 3
	echo "<br />";   // Espacio
	$total = 10;  // volvemos a asignar 10 a la variable
	
	// Operador .=
	echo "\$total .= 3 es " . $total .= 3 . ".";  // $total = $total . 3
	echo "<br />";   // Espacio
	$total = 10;  // volvemos a asignar 10 a la variable
?>