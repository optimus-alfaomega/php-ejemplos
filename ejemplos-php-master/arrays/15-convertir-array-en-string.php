<?php
	// Ejemplo de Arrays en  PHP - https://www.dinapyme.com
	// Convertir un array en String con función implode().
	
	$nombres = array ("Oscar", "Sara", "Juan", "Pedro", "Yoli");
	
	foreach ($nombres as $clave=>$valor){
		echo "El contenido de \$nombres[$clave] es : $valor <br />";
	}
	
	echo "<br />";
	
	//Convertir el array en string
	$texto_array = implode($nombres);
	echo $texto_array;
?>