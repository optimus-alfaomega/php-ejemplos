<?php
	// Ejemplo de variables PHP - https://www.dinapyme.com
	// Cambio de tipo de variable con CASTING
	// En este ejemplo realizamos varios cambios de tipo de una variable y los vamos mostrando.
		
	$variable1 = 44;  // Declaración y asignación de un Entero.
	
	// Comprobación si la variable es de tipo entero.
	if (is_integer($variable1)) { 
		echo "La variable \$variable1 es de tipo <strong>Entero (Integer)</strong> y el contenido es: <strong>" . $variable1 . "</strong>.<br />";
	}

	// Creación de una copia de la variable pero cambiando a tipo String.
	$variable2 = (string) $variable1;
	
	// Comprobación si la variable es de tipo String
	if (is_string($variable2)) { 
		echo "La variable \$variable2 es de tipo <strong>String</strong> y el contenido es: <strong>" . $variable1 . "</strong>.<br />";
	}	
	
	// Creación de una copia de la variable pero cambiando a tipo Double.
	$variable3 = (double) $variable1;
	
	// Comprobación si la variable es de tipo Double
	if (is_double($variable3)) { 
		echo "La variable \$variable3 es de tipo <strong>Double</strong> y el contenido es: <strong>" . $variable1 . "</strong>.<br />";
	}

	// Creación de una copia de la variable pero cambiando a tipo Boolean.
	$variable4 = (boolean) $variable1;
	
	// Comprobación si la variable es de tipo Bool
	if (is_bool($variable4)) { 
		echo "La variable \$variable4 es de tipo <strong>Boolean</strong> y el contenido es: <strong>" . $variable1 . "</strong>.<br />";
	}	
?>