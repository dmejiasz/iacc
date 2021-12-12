<html>      
	<head>
          <title>Tarea 4 - Semana 6</title>
       </head>
  <body>
<?php
/*
Diseñe dos arreglos que almacenen 5 posiciones cada uno y obtenga la suma de los
arreglos en un tercer arreglo denominado resultado. Es decir:
Resultado[0] = ArregloA[0] + ArregloB[0]
La suma se debe realizar por medio de un ciclo repetitivo.
*/
	$arregloA = array(6,35,43,87,9);
	$arregloB = array(17,23,25,22,15);
	for ($s=0;$s<count($arregloA);$s++) {
		$resultado[]=$arregloA[$s] + $arregloB[$s];
	}
	echo "Nuevo arreglo y su contenido <br>";
	for ($x=0;$x<count($resultado);$x++) {
		echo "El resultado de la suma en la posición $x es $resultado[$x]<br>";
	}
	var_dump($resultado);
?>
</body>
</html>