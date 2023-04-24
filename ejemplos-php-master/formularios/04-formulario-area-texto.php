<?php
	// Ejemplo de proceso de datos de formularios en  PHP - Textarea
	// Recoger los datos del formulario enviado por el fichero "04-formulario-area-texto.html".
	// Procesar el texto y mostrarlo con php.
	// Ejemplo realizado por Óscar Abad Folgueira: http://www.oscarabadfolgueira.com y https://www.dinapyme.com
	
	$opinion = $_POST["opinion"];
	
	echo "<h3>Muchas gracias por darnos la siguiente opinión: </h3>";
	
	// reemplazamos el salto de linea \n por <br> y lo mostramos.
	echo str_replace( "\n", "<br />", $opinion );
	//echo $opinion;
	echo "<br /><h3>Esperamos volver a verte!</h3>";
?>