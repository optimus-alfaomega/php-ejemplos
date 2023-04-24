<?php
	// Ejemplo de Arrays en  PHP - https://www.dinapyme.com
	// Crear un array con 5 elemementos de texto (strings) con funcion array().
	// Posteriormente mostrar todos los elementos del array con bucle for.
	
	$nombres = array ("Oscar", "Sara", "Juan", "Pedro", "Yoli");
	
	for ($i = 0; $i < count($nombres); $i++){
		echo "El contenido de \$nombres[$i] es : $nombres[$i] <br />";
	}
?>