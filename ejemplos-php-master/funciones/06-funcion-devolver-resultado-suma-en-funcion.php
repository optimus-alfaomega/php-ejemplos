<?php
	// Ejemplo de funciones en PHP.
	// En este ejemplo se crea una función que calcula la suma de dos valores almacenados en variables.
	// La misma función será la encargada de mostrar el texto y el resultado de la suma de las dos variables.
	// Por último realizamos la llamada a la función para que se muestre.
				
	function sumarDosNumeros ()
	{
		$numero1 = 5;
		$numero2 = 5;
		$suma = $numero1 + $numero2;
		$texto = "El resultado de la suma de " . $numero1 . " + " . $numero2 . " es: " . $suma;
		
		return $texto;
	}	
	
	// A continuación llamamos a la función anterior para que muestre todo.
	echo sumarDosNumeros();
	
?>