<?php
	// Ejemplo de operadores y expresiones PHP - https://www.dinapyme.com
	// Operadores aritméticos: +, -, /, *, %
	// En este ejemplo realizamos las diferentes operaciones y mostramos los resultados por pantalla.

	//Creación de dos variables con números enteros
	$variable1 = 10;
	$variable2 = 3;
	
	// Título
	echo "<center><h1>Operadores aritméticos en PHP</h1></center>";
	echo "<br />";
	
	// Uso del operador +
	echo "<h2>Operador Suma (+)</h2>";
	$suma = $variable1 + $variable2;  // Guardamos el resultado de la suma de las dos variables en la variable $suma.
	echo "El resultado de la operación $variable1 + $variable2 es igual a: " . $suma . "<br />";
	
	// Uso del operador -
	echo "<h2>Operador Resta (-)</h2>";
	$resta = $variable1 - $variable2;  // Guardamos el resultado de la resta de las dos variables en la variable $resta.
	echo "El resultado de la operación $variable1 - $variable2 es igual a: " . $resta . "<br />";
	
	// Uso del operador /
	echo "<h2>Operador División (/)</h2>";
	$division = $variable1 / $variable2;  // Guardamos el resultado de la división de las dos variables en la variable $division.
	echo "El resultado de la operación $variable1 / $variable2 es igual a: " . $division . "<br />";
	
	// Uso del operador *
	echo "<h2>Operador Multiplicación (*)</h2>";
	$multiplicacion = $variable1 * $variable2;  // Guardamos el resultado de la multiplicación de las dos variables en la variable $multiplicacion.
	echo "El resultado de la operación $variable1 * $variable2 es igual a: " . $multiplicacion . "<br />";
	
	// Uso del operador %
	echo "<h2>Operador Resto (%)</h2>";
	$resto = $variable1 % $variable2;  // Guardamos el resultado del resto de la división de las dos variables en la variable $resto.
	echo "El resultado de la operación $variable1 % $variable2 es igual a: " . $resto . "<br />";
?>