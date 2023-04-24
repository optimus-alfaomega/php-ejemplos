<?php
	// Ejemplo de proceso de datos de formularios en  PHP - Checkbox
	// Recoger los datos del formulario enviado por el fichero "04-formulario-area-texto.html".
	// Procesar el texto y mostrarlo con php.
	// Ejemplo realizado por Óscar Abad Folgueira: http://www.oscarabadfolgueira.com y https://www.dinapyme.com
	
	// Guardamos los datos introducidos por el usuario en variables.
	// Debemos comprobar que los campos tienen contenido para que no den error.
	$nombre = $_POST['nombre'];
	
	if(isset($_POST['tipo_musica'])) {
		$tipo_musica = $_POST['tipo_musica'];
	}
	// Mostrar los tipos de música que le gustan
	echo "Muy bien <strong>" . $nombre . "</strong>, por lo que veo la música que más te gusta es <strong>" . $tipo_musica . "</strong> esto está muy bien!";

	
?>