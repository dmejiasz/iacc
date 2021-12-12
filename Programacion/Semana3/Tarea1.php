<html>      
	<head>
          <title>Tarea 1 - Semana 3</title>
       </head>
  <body>
<?php
/*
	1. Utilizando operadores de comparación y lógicos, resuelva el siguiente caso, con PHPtester:
	• Declare una variable que guarde la edad de una persona. Luego, si la edad es menor de
	18 años, aparecerá el siguiente mensaje: “Eres menor de edad, no podemos
	contratarte”.
	• Si es mayor de 18 años y menor o igual de 60 años, le saldrá el mensaje: “Es posible
	que usted sea un candidato al cargo”.
	• Si es mayor de 60 años, le saldrá el mensaje: “Lo sentimos, pero usted no cumple el
	perfil del cargo”.
	Pruebe su programa en tres casos: una persona de 17 años, una de 64 y una de 35. Muestre las
	evidencias respectivas en cada caso.
*/
	if(!empty($_POST['edad']))
	{
	  	if($_POST['edad']<18){
			$mensaje = "Eres menor de edad, no podemos contratarte";
		}
		elseif(($_POST['edad']>= 18) AND ($_POST['edad']<=60)){
			$mensaje = "Es posible que usted sea un candidato al cargo";
		}
		elseif($_POST['edad']> 60){
			$mensaje = "Lo sentimos, pero usted no cumple el perfil del cargo";
		}
	}
?>
    <form method="post" action=""> 
		Ingrese su edad: <input type="text" required name="edad"><br><br>
   		<input type="submit" value="Validar edad">
		<br><br><br>
		<?php 
			if(!empty($mensaje)){
				print $mensaje;
			}
		?>
   </form>
  </body>
</html>