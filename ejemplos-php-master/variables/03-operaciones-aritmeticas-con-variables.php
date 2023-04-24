<?php
	// Ejemplo de variables PHP - https://www.dinapyme.com
	// Crear 2 variables de tipo entero.
	// Realizar las cuatro diferentes operaciones aritméticas y guardar los resultados en las variables: suma, resta, multiplicacion y division
	// Por último, mostrar el resultado de las operaciones
	
	// Crear dos variables de tipo entero
	$numero1 = 45;
	$numero2 = 65;
	
	// Realizar la suma de las dos variables y almacenar el resltado en la variable $suma.
	$suma = $numero1 + $numero2;

	// Realizar la resta de las dos variables y almacenar el resltado en la variable $resta.
	$resta = $numero1 - $numero2;

	// Realizar la multiplicación de las dos variables y almacenar el resltado en la variable $multiplicacion.
	$multiplicacion = $numero1 * $numero2;

	// Realizar la division de las dos variables y almacenar el resltado en la variable $division.
	$division = $numero1 / $numero2;
	
	// Mostrar el resultado de la suma de las dos variables
	echo ("El resultado de la suma de $numero1 y $numero2 es: " . $suma );
	echo ("<br /><br />");
	
	// Mostrar el resultado de la resta de las dos variables
	echo ("El resultado de la resta de $numero1 y $numero2 es: " . $resta );
	echo ("<br /><br />");
		
	// Mostrar el resultado de la multiplicación de las dos variables
	echo ("El resultado de la multiplicación de $numero1 y $numero2 es: " . $multiplicacion );
	echo ("<br /><br />");
		
	// Mostrar el resultado de la división de las dos variables
	echo ("El resultado de la división de $numero1 y $numero2 es: " . $division );	
?>