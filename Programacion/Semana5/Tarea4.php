<html>      
	<head>
          <title>Tarea 4 - Semana 5</title>
       </head>
  <body>
<?php
/*
Calcule el sueldo que le corresponde al trabajador de una empresa que cobra $400.000
mensuales. El programa debe realizar los cálculos en función de los siguientes criterios:
a) Si lleva más de 10 años en la empresa se le aplica un aumento del 10%.
b) Si lleva menos de 10 años, pero más de 5, se le aplica un aumento del 7%.
c) Si lleva menos de 5 años, pero más de 3, se le aplica un aumento del 5%.
d) Si lleva menos de 3 años se le aplica un aumento del 3%.
e) Pruebe los 4 casos anteriores utilizando valores de prueba para las variables de sueldo y antigüedad.
*/
	$sueldo_base=400000;
	//$antiguedad=12;
	//$antiguedad=9;
	//$antiguedad=4;
	$antiguedad=2;
	
	if($antiguedad>10){
		$aumento=10;			
	}
	elseif ($antiguedad<10 && $antiguedad>5){
		$aumento=7;
	}
	elseif ($antiguedad<5 && $antiguedad>3){
		$aumento=5;
	}
	elseif ($antiguedad<3){
		$aumento=3;
	}	
	printf ("Sueldo base $%s, y por llevar %s años en la empresa, tendrá un aumento de %s porciento, 
				su nuevo sueldo es $%s ",number_format($sueldo_base, 0 , ',' , '.' ),
										 $antiguedad,
										 $aumento,
										 number_format($sueldo_base * (($aumento/100)+1), 0 , ',' , '.' ));
?>
</body>
</html>