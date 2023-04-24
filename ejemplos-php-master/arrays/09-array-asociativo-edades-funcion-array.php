<?php
	// Ejemplo de Arrays en  PHP - https://www.dinapyme.com
	// Crear un array asociativo con 5 elemementos para almacenar nombres y edades con la funcion array().
	// Posteriormente mostrar todos los elementos del array con bucle foreach.
	
	$edad = array("Oscar"=>43, "Sara"=>80, "Juan"=>27, "Pedro"=>56, "Yoli"=>42);
	
	foreach ($edad as $nombre=>$edad){
		echo "$nombre tiene $edad años.<br />";
	}
?>