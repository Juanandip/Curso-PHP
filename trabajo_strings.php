<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>video 8</title>

<style>

.resaltar{
	color:#F00;
	font-weight:bold;
}

</style>


</head>

<body>

<?php

	/*-------------------PRIMERA-PARTE-VIDEO-8------------------*/
	//echo "<p class='resaltar'>Esto es un ejemplo de frase </p>";
	//echo '<p class="resaltar">Esto es un ejemplo de frase </p>';
	//echo "<p class=\"resaltar\">Esto es un ejemplo de frase </p>";
	
	/*-------------------SEGUNDA-PARTE-VIDEO-8------------------*/
	//$nombre="Juan";
	//echo "Hola $nombre";
	
	/*-------------------TERCERA-PARTE-VIDEO-8------------------*/
	$variable1="Casa";
	$variable2="CASA";
	
	//Devulve 1 si no son iguales. 0 si son iguales
	//$resultado=strcmp($variable1,$variable2); 
	$resultado=strcasecmp($variable1,$variable2);
	
	//echo "El resultado es: $resultado";
	
	if($resultado){
		echo "No coinciden";
	}else{
		echo "Coinciden";
	}

?>


</body>
</html>