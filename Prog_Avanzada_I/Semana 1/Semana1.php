<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php
    $entrada = (isset($_POST['opcion'])) ? $_POST['opcion'] : null;
    switch ($entrada)
  	{
      case 1:
        $lado1 = 4;
        $lado2 = 7;
        $altura = 3;
        $area_trapecio = (($lado1 + $lado2)* $altura) / 2;
        $mensaje = "Si tenemos un triángulo donde lado1 $lado1 + lado2 $lado2 con altura $altura su área del trapecio es: $area_trapecio";
        break;

      case 2:
        $base = 4;
        $altura = 3;
        $area_triangulo = ($base * $altura) / 2;
        $mensaje =  "Si tenemos un triángulo con base $base con altura $altura su área es: $area_triangulo";
        break;
      case 3:
        $Vector1 = array(6,35,43,87,9);
        $Vector2 = array(17,23,25,22,15);
        for ($s=0;$s<count($Vector1);$s++) {
          $NvoVector[]=$Vector1[$s] + $Vector2[$s];
        }
            echo "Nuevo arreglo y su contenido <br>";
            for ($x=0;$x<count($NvoVector);$x++) {
              echo "El NvoVector de la suma en la posición $x es $NvoVector[$x]<br>";
            }
        //var_dump($NvoVector);
        break;
      default:
        $mensaje = "No ha ingresado una opción o ingresada no es correcta";
        break;
  	}
  ?>
      <form method="post" action="">
        <br>
      1.- Area de un trapecio <br>
      2.- Area de un triangulo <br>
      3.- Suma de 2 vectores<br><br>
  		Seleccione una opción: <input type="text" required name="opcion"><br><br>
     		<input type="submit" value="Continuar">
  		<br><br><br>
  		<?php
  			if(!empty($mensaje)){
  				print $mensaje;
  			}
  		?>
     </form>

  </body>
</html>
