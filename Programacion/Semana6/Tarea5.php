<html>      
	<head>
          <title>Tarea 5 - Semana 6</title>
       </head>
  <body>
<?php
/*
Cree el código PHP que permita almacenar -en un arreglo bidimensional- el número de
empleados de una empresa, ordenados en función del nivel y del idioma que dominan.
Se deben considerar 3 niveles: básico, medio y avanzado, que correspondan con las
filas de la matriz, y 4 idiomas (inglés, francés, alemán y español), que correspondan
con las columnas de la matriz. Además, se debe mostrar por pantalla los empleados
que existen en cada nivel e idioma. Ejemplo: numeroEmpleados [0]['frances']
representará el número de alumnos que existen en el nivel básico, idioma francés.
*/
	$empleados = array(
		array( 1, 14, 8, 3),
		array( 6, 19, 7, 2),
		array( 3, 13, 4, 1)
	);
	$encabezado = array ("Inglés", "Francés", "Alemán", "Español");
	$nivel= array ("Básico", "Medio", "Avanzado");
	$i=0;
	
	echo "<table align='left' width='30%' border='1' cellspacing='0'>";
	echo "<tr><td></td>";
	for ($x=0;$x<count($encabezado);$x++){
			echo "<th>$encabezado[$x]</th>";
	}
	echo "</tr>";

	foreach ($empleados as $idioma){
	    list($ingles, $frances, $aleman, $espanol) = $idioma;
		echo "<tr>";
		echo "<th>$nivel[$i]</th>";
		echo "<td align='center'>$ingles</td>";
		echo "<td align='center'>$frances</td>";
		echo "<td align='center'>$aleman</td>";
		echo "<td align='center'>$espanol</td>";
		echo "</tr>";
		$i++;
	}
	echo "</table>"
?>
</body>
</html>