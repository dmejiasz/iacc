<html>      
	<head>
          <title>Tarea 3 - Semana 6</title>
       </head>
  <body>
<?php
/*
Declare un arreglo de valores booleanos de nombre $respuesta e introduce en él seis
elementos que sean false, true, false, true, true, false. A continuación, muestre por
pantalla el elemento con localizador 2. 
*/
	$respuesta = array(false, true, false, true, true, false);
	echo "<br>Se muestra por pantalla el elemento con localizador 3 y este es: ";
	echo "<br><br>";
	echo $respuesta[2];
	echo "<br><br>";
	if (!$respuesta[2]){
		echo "No se ve por pantalla pero el valor es false";
	}
	
?>
</body>
</html>