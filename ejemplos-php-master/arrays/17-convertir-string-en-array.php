<?php
	// Ejemplo de Arrays en  PHP - https://www.dinapyme.com
	// Convertir un un string en array.
	// En este caso indicamos un separador en la función explode (,)
	
	$cadena_texto = "Oscar, Sara, Juan, Pedro, Yoli";
	
	echo "Cadena de texto: $cadena_texto<br /><br />";
	
	//usamos explode para crear un array a partir de la cadena de texto.
	$nombres = explode( ", ", $cadena_texto);
	
	//Mostrar del contenido del array con la función print_r();
	print_r($nombres);
	
	//Ahora mostramos el tercer elemento del array
	echo "<br /><br />El tercer elemento del array es: $nombres[2]";
	
	// Para terminar mostramos todos los elementos del array con foreach()
	echo "<br/><br />Todos los elementos del array<br />";
	
	foreach ($nombres as $clave=>$valor){
		echo "Nombre $clave: $valor <br />";
	}
	
	
?>