<?php
	// Ejemplo de Arrays en  PHP - https://www.dinapyme.com
	// Crear un array con 5 elemementos de texto (strings) con funcion array().
	// Posteriormente mostrar todos los elementos del array con bucle foreach.
	
	$nombres = array ("Oscar", "Sara", "Juan", "Pedro", "Yoli");
	
	foreach ($nombres as $clave=>$valor){
		echo "El contenido de \$nombres[$clave] es : $valor <br />";
	}
?>