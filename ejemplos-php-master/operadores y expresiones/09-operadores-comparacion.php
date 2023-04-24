<?php
	// Ejemplo de operadores y expresiones PHP - https://www.dinapyme.com
	// Operadores de comparación. ==, !=, ===, >, >=, >, <=
	// En este ejemplo dos pruebas con el operador != (diferente o no igual).
	
	$numero = 10;  // variable para los ejemplos
	
	// Título
	echo "<center><h1>Operadores de Comparación:</h1></center>";
	
	// Mostrar el contenido de la variable $numero
	echo "La variable número contiene el valor " . $numero . "<br />";
	
	// mostrar si el contenido de la variable $número es 10.
	echo "Comprobar si \$numero es igual a 10: ";
	echo ($numero == 10);  // Muestra 1 porque es igual.
	echo "<br />";
	
	// mostrar si el contenido de la variable $numero es diferente de 5
	echo "Comprobar si \$numero es diferente a 5: ";
	echo ($numero != 5);  // No muestra 1 porque no es diferente
	echo "<br />";
	
	// mostrar si el contenido y el tipo de la variable $numero es idéntica a 10
	echo "Comprobar si el contenido y tipo de la variable \$numero es idéntico a 10: ";
	echo ($numero === 10);  // Muestra 1 porque son idénticos en valor y tipo
	echo "<br />";
	
	// mostrar si el contenido de la variable $numero es mayor que 5
	echo "Comprobar si \$numero es mayor que 5: ";
	echo ($numero > 5);  // muestra 1 porque es mayor que 5
	echo "<br />";
	
	// mostrar si el contenido de la variable $numero es mayor o igual que 10
	echo "Comprobar si \$numero es mayor o igual que 10: ";
	echo ($numero >= 10);  // muestra 1 porque es mayor o igual que 10. es igual
	echo "<br />";	
	
	// mostrar si el contenido de la variable $numero es menor que 20
	echo "Comprobar si \$numero es menor que 10: ";
	echo ($numero < 20);  // muestra 1 porque es menor que 20
	echo "<br />";
	
	// mostrar si el contenido de la variable $numero es menor o igual que 10
	echo "Comprobar si \$numero es menor o igual que 10: ";
	echo ($numero <= 10);  // muestra 1 porque es menor o igual que 10. es igual
	echo "<br />";	
?>