<?php
	// Ejemplo de Condicioales en  PHP - https://www.dinapyme.com
	// Ejemplo sobre IF	sin utilizar Else
	// Comprobar si el número es mayor o igual que 18 y menor o igual que 65.
	
	$edad = 44;  // Asignar una edad a la variable. Podemos cambiar el valor para ver diferentes resultados
	
	if (($edad >= 18) && ($edad <=65)){   // si el contenido de $edad es mayor o igual a 18 mostrará y menor o igual que 65.
		echo "Estás en edad de trabajar. Tienes " . $edad . " años.";
	}


?>