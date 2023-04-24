<?php
	// Ejemplo de funciones en PHP.
	// Este ejemplo muestra cómo devolver el resultado de la suma pero en este caso utilizamos variables.
			
	function sumarDosNumeros ()
	{
		$numero1 = 5;
		$numero2 = 4;
		
		return $numero1 + $numero2;
	}	
	
	// A continuación llamamos a la función anterior para que muestre el texto por pantalla.
	echo ("El resultado de la suma es: " . sumarDosNumeros() );
	
?>