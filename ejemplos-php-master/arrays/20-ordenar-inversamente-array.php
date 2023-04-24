<?php
	// Ejemplo de Arrays en  PHP - https://www.dinapyme.com
	// Ordenar un array en orden inverso.
	// Primero creamos un array y mostramos su contenido.
	// Posteriormente utilizamos la función rsort() y volvemos a mostra para ver la diferencia.
	
	$nombres = array("Oscar", "Sara", "Juan", "Pedro", "Yoli");
	
	foreach ($nombres as $clave=>$valor){
		echo "Nombre $clave: $valor<br />";
	}
	
	echo "<br />Ordenamos el array con la función sort<br /><br />";
	
	// ordenar el array con sort()
	rsort($nombres);
	
	// Volver a mostrar el contenido del array ordenado.
	foreach ($nombres as $clave=>$valor){
		echo "Nombre $clave: $valor<br />";
	}
?>