<?php
/*
2. Dada las siguientes expresiones, ingréselas en PHPTester e indique el resultado respectivo.
Considere las siguientes variables:
A = 4 B = 5 C = 10 D = 3 E = 7 F= 9
A partir de lo anterior, determine el valor de:
a) X = (A<B) OR (NOT(A<>C) AND (A+B<D OR A<F))
Y = D * B + F – A / B * F
*/
$A = 4;
$B = 5;
$C = 10;
$D = 3;
$E = 7;
$F = 9;
$X = ($A<$B) OR (NOT($A<>$C) AND ($A+$B<$D OR $A<$F));
print "Resultado de X es $X (";
	switch ($X){
		case 0:
			print "False";
			break;
		case 1:
			print "True";
			break;
	}
print ")<br><br>";
$Y = $D * $B + $F - $A / $B * $F;
print "Resultado de Y es $Y";
?>