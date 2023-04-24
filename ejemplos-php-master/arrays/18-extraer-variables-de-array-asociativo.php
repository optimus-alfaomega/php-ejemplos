<?php
	// Ejemplo de Arrays en  PHP - https://www.dinapyme.com
	// Extraer los elementos de un array asociativo y convertirlos en variables con extract()
	
	$edades = array("Oscar"=>43, "Sara"=>80, "Juan"=>27, "Pedro"=>56, "Yoli"=>42);

	// Extraer los elementos del array en variables
	extract($edades);
	
	//Mostrar una a una todas las variables
	
	echo "La variable \$Oscar contiene: $Oscar<br/>";
	echo "La variable \$Sara contiene: $Sara<br/>";
	echo "La variable \$Juan contiene: $Juan<br/>";
	echo "La variable \$Pedro contiene: $Pedro<br/>";
	echo "La variable \$Yoli contiene: $Yoli<br/>";
?>