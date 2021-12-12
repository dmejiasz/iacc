<html>      
	<head>
          <title>Tarea 5 - Semana 5</title>
       </head>
  <body>
<?php
/*
Dada la altura y la edad de N cantidad de personas, determine si es apto para jugar en
un equipo de baloncesto. Debe considerar que la persona debe tener 18 años o más, y
debe medir 1,70 m o más. Muestre el total de aceptados y rechazados al terminar el
ciclo.
*/
	$equipo = array(
		array( "Pedro", 160, 18),
		array( "Walter", 190, 19),
		array( "Mario", 180, 17),
		array( "Fernando", 189, 20),
		array( "Claudio", 195, 18),
		array( "Carolina", 185, 18)
	);
	$aceptados=0;
	$rechazados=0;
	$i=0;
	foreach ($equipo as $jugador){
	    list($nombre, $altura, $edad) = $jugador;
		$i++;
	    echo "$i.- $nombre mide " . number_format($altura/100,2) ."mts edad $edad años";
		if($edad>=18 && $altura>=170){
			$aceptados++;
			echo " -> Aceptado <br>";
		}
		else{
			$rechazados++;
			echo " -> Rechazado <br>";
		}
	}
	
	echo "<br>Total de aceptados :$aceptados";
	echo "<br><br>";
	echo "Total de rechazados :$rechazados";
	echo "<br><br>";
	
?>
</body>
</html>