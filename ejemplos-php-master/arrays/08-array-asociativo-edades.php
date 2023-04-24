<?php
	// Ejemplo de Arrays en  PHP - https://www.dinapyme.com
	// Crear un array asociativo con 5 elemementos para almacenar nombres y edades.
	// Posteriormente mostrar todos los elementos del array con bucle foreach.
	
	$edad["Oscar"] = 43;
	$edad["Sara"] = 80;
	$edad["Juan"] = 27;
	$edad["Pedro"] = 56;
	$edad["Yoli"] = 42;
	
	foreach ($edad as $nombre=>$edad){
		echo "$nombre tiene $edad años.<br />";
	}
?>