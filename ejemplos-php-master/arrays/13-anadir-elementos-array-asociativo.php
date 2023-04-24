<?php
	// Ejemplo de Arrays en  PHP - https://www.dinapyme.com
	// Crear un array asociativo con 5 elemementos para almacenar nombres y edades con la funcion array().
	// Posteriormente mostrar todos los elementos del array con bucle foreach.
	// Para finalizar, añadirmos dos nuevos elementos al array asociativo y mostramos todo el array de nuevo.
	
	$edades = array("Oscar"=>43, "Sara"=>80, "Juan"=>27, "Pedro"=>56, "Yoli"=>42);
	
	foreach ($edades as $nombre=>$edad){
		echo "$nombre tiene $edad años.<br />";
	}

	echo "<br />";
	
	// Añadir dos elementos al array
	$edades["Roberto"] = 66;
	$edades["Catalina"] = 33;
	
	echo "<br />Mostramos el array con los dos nuevos elementos";
	
	echo "<br /><br />";
	foreach ($edades as $nombre=>$edad){
		echo "$nombre tiene $edad años.<br />";
	}
?>