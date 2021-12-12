<html>      
	<head>
          <title>Tarea 2 - Promedio</title>
       </head>
  <body>
<?php
	if(!empty($_POST['numero1']))
	{
	  	$total='';
		$total = ($_POST['numero1']+$_POST['numero2']+$_POST['numero3'])/3;	
	}
?>
    <form method="post" action=""> 
		Ingrese el valor 1: <input type="text" required name="numero1"><br>
		Ingrese el valor 2: <input type="text" required name="numero2"><br>
		Ingrese el valor 3: <input type="text" required name="numero3"><br>
   		<input type="submit" value="Promediar">
   </form>
<?php
	echo "El promedio: ".$total;
?>
  </body>
</html>