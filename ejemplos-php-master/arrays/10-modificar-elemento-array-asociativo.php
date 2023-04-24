<?php
	// Ejemplo de Arrays en  PHP - https://www.dinapyme.com
	// Crear un array asociativo con 5 elemementos para almacenar nombres y edades con la funcion array().
	// Posteriormente mostrar todos los elementos del array con bucle foreach.
	// Para finalizar, modificar el contenido del segundo elemento con otros datos y mostra de nuevo por pantalla el contenido del array.
	
	$edades = array("Oscar"=>43, "Sara"=>80, "Juan"=>27, "Pedro"=>56, "Yoli"=>42);

	foreach ($edades as $nombre=>$edad){
		echo "$nombre tiene $edad años.<br />";
	}
	
	echo "<br />Modificamos el segundo elemento del array<br />";
	
	// Modificar la edad del elemento "Sara" del array
	$edades["Sara"] = 81;
	echo "Ahora Sara tiene ". $edades["Sara"] . "años"; 

?>