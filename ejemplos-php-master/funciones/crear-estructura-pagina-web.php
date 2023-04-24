<?php
// Este ejemplo crea la estructura de una página web con PHP en varias funciones

function inicioHead ()
{
	echo ('<!DOCTYPE html>');
	echo ('<html>');
	echo ('<head><meta charset="utf-8">');
	
}
	
function tituloWeb ( $tituloWeb )
{
	echo ('<title>' . $tituloWeb . '</title>');
}

function finalHead ()
{
	echo ('</head>');
}

function inicioBody ()
{
	echo ('<body>');
}

function finalBody ()
{
	echo ('</body></html>');
}

inicioHead();
tituloWeb('Título de la página web');
finalHead();
inicioBody();
finalBody();
?>