<?php
	// Ejemplo de Condicioales en  PHP - https://www.dinapyme.com
	// Ejemplo sobre ELSEIF
	// Mostrar un mensaje dependiendo de la temperatura.
	
	$temperatura = 44;  // Establecer el valor de la temperatura
	
	if ($temperatura <= 0) {
		echo "Hace muchísimo frío.";  // Menaje si hace menos de 0 grados o 0
	} elseif ($temperatura <= 15){
		echo "Hace fresco.";		  
	} elseif ($temperatura <= 22){
		echo "No se está mal pero podía estar mejor.";     
	} elseif ($temperatura <= 26) {
		echo "Ahora se está muy bien.";
	} elseif ($temperatura <= 32) {
		echo "Hace bastante calor.";
	} else {
		echo "Esto no hay quien lo aguante. Menudo calor!!";
	}
	 
?>