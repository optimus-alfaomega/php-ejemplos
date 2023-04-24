<?php
	// Ejemplo de Arrays en  PHP - https://www.dinapyme.com
	// Crear un array con 5 elemementos de texto (strings) con funcion array().
	// Posteriormente mostrar todos los elementos del array con bucle for.
	// Para terminar modificamos el contenido del tercer elemento del array y lo mostramos.
	
	$nombres = array ("Oscar", "Sara", "Juan", "Pedro", "Yoli");
	
	for ($i = 0; $i < count($nombres); $i++){
		echo "El contenido de \$nombres[$i] es : $nombres[$i] <br />";
	}
	
	echo "<br />Modificar el contenido del tercer elemento del array<br />";
	
	// Modificar el tercer elemento del array.
	$nombres[2] = "Pepe";
	
	echo "<br />Ahora el tercer elemento del array contiene el nombre $nombres[2]<br />";
	
	echo "<br />Volvemos a mostrar el contenido del array<br /><br />";
	
	for ($i = 0; $i < count($nombres); $i++){
		echo "El contenido de \$nombres[$i] es : $nombres[$i] <br />";
	}
?>