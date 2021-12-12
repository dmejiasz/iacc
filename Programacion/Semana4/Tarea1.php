<html>
	<head>
          <title>Semana 4 - Tarea 1</title>
    </head>

<?php
/*
Utilizando PHPTester, diseñe una función que permita calcular el área de un triángulo,
un cuadrado y un círculo, considere todas las variables necesarias y declárelas con
valores de prueba para ejecutar la función y obtener en pantalla las 3 áreas
configuradas.
*/

function calcula_area ($val1, $val2, $tipo){
	$salida = "";
	if ($tipo=="circulo"){
		$radio = $val1;
		define('pi', '3.1415');
		$resultado = round(pi * pow($radio, 2),2);
		
		$salida = "El área de un $tipo con Radio $radio su área es: $resultado";
		$salida = $salida . "<br><br><br>";
		}
		else if ($tipo=="triangulo"){
			$base = $val1;
			$altura = $val2;
			define ('C','2');
			$resultado = ($base * $altura) / C;
			
			$salida = "Si tenemos un $tipo con base $base con altura $altura su área es: $resultado";
			$salida = $salida . "<br><br><br>";
		}
			else if ($tipo=="cuadrado"){
				$base = $val1;
				$resultado = pow ($base, 2);
				$salida = "Si tenemos un $tipo con base $base su área es: $resultado";
				$salida = $salida . "<br><br><br>";
			}
	return $salida; // Resultado de las operaciones
	}
$calcular = calcula_area(5,0,"circulo");
echo $calcular;

$calcular = calcula_area(3,4,"triangulo");
echo $calcular;

$calcular = calcula_area(5,0,"cuadrado");
echo $calcular;
?>
</html>