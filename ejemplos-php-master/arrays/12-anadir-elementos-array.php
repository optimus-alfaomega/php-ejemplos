<?php
	// Ejemplo de Arrays en  PHP - https://www.dinapyme.com
	// Crear un array con 5 elemementos de texto (strings) con funcion array().
	// Posteriormente mostrar todos los elementos del array con bucle for.
	// Añadir dos elemtnos más al array
	
	$nombres = array ("Oscar", "Sara", "Juan", "Pedro", "Yoli");
	
	foreach ($nombres as $clave=>$valor){
		echo "El contenido de \$nombres[$clave] es : $valor <br />";
	}
	
	echo "<br />";
	
	// Añadir dos elementos al array
	$nombres[] = "Roberto";
	$nombres[] = "Catalina";
	
	echo "Mostramos de nuevo el array con los elementos nuevos<br />";
	echo "<br />";
	foreach ($nombres as $clave=>$valor){
		echo "El contenido de \$nombres[$clave] es : $valor <br />";
	}
	
	
?>