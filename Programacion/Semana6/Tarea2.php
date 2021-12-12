<html>      
	<head>
          <title>Tarea 2 - Semana 6</title>
       </head>
  <body>
<?php
/*
Declare un arreglo de números enteros de nombre $edades e introduce en él 8
elementos cuyos valores sean 17, 35, 25, 87, 15, 9, 69 y 5. A continuación, muestre
por pantalla el elemento con localizador 3.
*/
	$edades = array(17,35,25,87,15,9,69,5);
	for ($s=0;$s<count($edades);$s++) {
		echo "<br>El contenido de la posición $s es $edades[$s]";
		echo "<br>";
	}
	
?>
</body>
</html>