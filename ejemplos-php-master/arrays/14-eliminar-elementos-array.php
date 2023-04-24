<?php
	// Ejemplo de Arrays en  PHP - https://www.dinapyme.com
	// Crear un array con 5 elemementos de texto (strings) con funcion array().
	// Posteriormente mostrar todos los elementos del array con bucle for.
	// Eliminar el elemento número 3 del array y volver a mostarlo completo
	
	$nombres = array ("Oscar", "Sara", "Juan", "Pedro", "Yoli");
	
	foreach ($nombres as $clave=>$valor){
		echo "El contenido de \$nombres[$clave] es : $valor <br />";
	}
	
	echo "<br />";
	// Eliminar el tercer elemento del array
	unset ($nombres[2]);
	
	echo "Mostramos de nuevo el array con el cambio<br />";
	echo "<br />";
	foreach ($nombres as $clave=>$valor){
		echo "El contenido de \$nombres[$clave] es : $valor <br />";
	}
	
	
?>