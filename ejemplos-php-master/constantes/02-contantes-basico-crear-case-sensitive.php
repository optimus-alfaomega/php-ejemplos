<?php
	// Ejemplo de constantes PHP - https://www.dinapyme.com
	// Creación de una constante y muestra por pantalla.
	// Definimos la contantes como no "case sensitive" y probamos varias opciones
	
	// Deifinir una constante sencilla
	define("ANIO", "2016", true);
	
	// Mostrar el contenido de la contante
	echo ANIO;
	
	// Mostrar el contenido de la constante con más texto.
	echo "<br/>";
	echo "Hoy es 22 de diciembre de " . ANIO . "<br />";
	
	
	// Mostrar el contenido de la constante con más texto. Probar case sensitive
	echo "<br/>";
	echo "Hoy es 22 de diciembre de " . Anio . "<br />";
	echo "Hoy es 22 de diciembre de " . anio . "<br />";
	echo "Hoy es 22 de diciembre de " . AniO . "<br />";
	
?>