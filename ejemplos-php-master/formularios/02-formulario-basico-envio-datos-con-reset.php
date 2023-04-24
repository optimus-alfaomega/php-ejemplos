<?php
	// Ejemplo de proceso de datos de formularios en  PHP 
	// Recoger los datos del formulario enviado por el fichero "02-formulario-basico-envio-datos-con-reset.html".
	// Procesar tanto el nombre como el mensaje para mostralo por pantalla.
	// Ejemplo realizado por Óscar Abad Folgueira: http://www.oscarabadfolgueira.com y https://www.dinapyme.com
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Proceso datos formulario</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>DATOS ENVIADOS</h1>
	<p>Hola, <strong><?php echo $_POST['nombre']; ?></strong>!</p>
	<p>El mensaje que has enviado es:
		<strong><?php echo $_POST['mensaje']; ?></strong></p>
</body>
</html>