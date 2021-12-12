<?php
/*
Muestre en pantalla sus nombres, apellidos y su ciudad de nacimiento
*/
$nombres = "Diego Edgardo";
$apellidos = "Mejías Zapata";
$ciudad = "Santiago";
echo "<table align='left' width='30%' border='1' cellspacing='0'>";
echo "<tr>";
echo "<th>Nombres</th>";
echo "<td>$nombres</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Apellidos</th>";
echo "<td>$apellidos</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Ciudad</th>";
echo "<td>$ciudad</td>";
echo "</tr>";
echo "</table>"
?>