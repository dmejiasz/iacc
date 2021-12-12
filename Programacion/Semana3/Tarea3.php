<?php
/*
3. Pruebe los siguientes programas en PHPTester y mencione las diferencias al evaluar las
expresiones:
*/
echo "Programa 1";
$var1 = true;
$var2 = false;
$todo = $var1 && $var2;
	if ($todo) {
	 print "<p>verdadero</p>\n";
	} else {
	 print "<p>falso</p>\n";
	}

echo "Programa 2";
$var1 = true;
$var2 = false;
$todo = $var1 and $var2;
	if ($todo) {
	 print "<p>verdadero</p>\n";
	} else {
	 print "<p>falso</p>\n";
	}

?>