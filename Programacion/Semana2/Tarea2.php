<?php
/*
• Declare las variables: radio (asigne el valor que desee)
• Declare la constante: pi = 3,1415
• Calcule el área del circulo. Investigue la fórmula de este cálculo.
*/
$radio = 2;
const pi = 3.1415;
$area_circulo = round(pi * pow($radio, 2),2);

echo "El área de un circulo con Radio $radio su área es: $area_circulo"

?>