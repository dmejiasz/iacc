<?php
/*
Dado el siguiente código, detecte los errores presentes y corríjalos 
para ejecutarlo y mostrar el resultado en pantalla sin errores. 
*/

// Boolean
echo "1.-";
	$valido = true;
	if ($valido) {
		$mensaje = "Ejemplo Booleano";
	}
	echo $mensaje;
	echo "<br><br>";
// Entero
echo "2.-";
	$entero1 = 350;
	$entero2 = -100;
	if ($entero1 > $entero2){
		$mensaje = "El numero $entero1 es mayor que $entero2";
	}
	echo $mensaje;
	echo "<br><br>";	
// Numeros en punto flotante
echo "3.-";
	$punto_flotante = 3.1415;
	const multiplo = 2;
	$resultado = $punto_flotante * multiplo;
	echo "El valor de $punto_flotante multiplicado por ".multiplo." es: $resultado";
	echo "<br><br>";	
// Cadenas
echo "4.-";
	/*
	\n Nueva línea.
	\r Retorno de carro.
	\t Tabulación horizontal.
	\\ Barra invertida.
	\$ Signo de peso.
	*/
	echo "Este es un jemplo de uso \n de las cadenas. \r \t";
	echo "Es importante la tabulación y esto no tiene costo \$";
	echo "<br><br>";
// Array
echo "5.-";
	echo "Ejemplo de Array";
	$arreglo[1]="Valor 1";
	
	for($i = 0; $i < 15; $i++)
	 {
	 $arreglo[$i] = $i*$i ;
	 } 
	 $cuenta_arreglo = count($arreglo);
    for($i = 0; $i < $cuenta_arreglo; $i++){
		echo "Valor arreglo: $arreglo[$i] <br>";
	}
	echo "<br><br>";
// Objetos
echo "6.-";
	class objeto {
		function mi_funcion () {
			echo "Ejemplo de un objeto y llamado a una función.";
		}
	}
	$MiObjeto = new objeto;
	$MiObjeto->mi_funcion();
	echo "<br><br>";
// Resource
echo "7.-";
	echo "Intenté de hacer un ejemplo pero el codigo me quedaba demasiado largo para poder realizar el ejercicio, gracias por entender.";
	echo "<br><br>";
// Null
echo "8.-";
	$valor_nulo = null;
	if($valor_nulo == null){
		echo "El valor de \$valor_nulo es $valor_nulo";
	}
?>
