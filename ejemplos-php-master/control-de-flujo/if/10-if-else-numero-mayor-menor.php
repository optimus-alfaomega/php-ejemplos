<?php
	// Ejemplo de Condicioales en  PHP - https://www.dinapyme.com
	// Ejemplo sobre IF	con Else  (sin elseif)
	// Dados dos números enteros, decir cual es el mayor de los dos.
	
	$numero1 = 66;  // Asignar un valor a $numero1.
	$numero2 = 54;  // Asignar un valor a $numero2.

	if (($numero1 >= $numero2 )) {    //Comprobar si $numero1 es mayor o igual que $numero2
		echo "$numero1 es mayor que $numero2";   // Mostrar si $numero1 es mayor o igual
	} else  {    //Comprobar si $numero1 es menor que $numero2
		echo "$numero1 es menor que $numero2";   // Mostrar si $numero2 es mayor
	} 
?>