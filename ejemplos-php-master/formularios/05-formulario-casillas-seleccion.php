<?php
	// Ejemplo de proceso de datos de formularios en  PHP - Checkbox
	// Recoger los datos del formulario enviado por el fichero "04-formulario-area-texto.html".
	// Procesar el texto y mostrarlo con php.
	// Ejemplo realizado por Óscar Abad Folgueira: http://www.oscarabadfolgueira.com y https://www.dinapyme.com
	
	// Guardamos los datos introducidos por el usuario en variables.
	// Debemos comprobar que los campos tienen contenido para que no den error.
	$nombre = $_POST['nombre'];
	
	if (isset( $_POST['heavy'])) {
		$heavy = $_POST['heavy'];
	}
	
	if (isset( $_POST['rock'] )){
		 $rock = $_POST['rock'];
	}
	
	if (isset ( $_POST['pop'] )) {
		$pop = $_POST['pop'];
	}
	
	if (isset ( $_POST['punk'] )) {
		$punk = $_POST['punk'];
	}
	
	// Mostrar los tipos de música que le gustan
	echo "Muy bien " . $nombre . ", por lo que veo te gustan estos tipos de música: ";
	if (isset($heavy)) echo "Heavy. ";
	if (isset($rock)) echo "Rock. ";
	if (isset($pop)) echo "Pop. ";
	if (isset($punk)) echo "Punk. ";
	
?>