<html>      
	<head>
          <title>Tarea 3 - Calculo de inmueble</title>
       </head>
  <body>
<?php
    const Valor_UF = 207000;
	if(!empty($_POST['ValUF']))
	{
	  	$total='';
		$total = $_POST['ValUF'] * Valor_UF;
		$total = number_format($total, 2, ',', '.');	
	}
?>
    <form method="post" action=""> 
		Ingrese valor de inmueble en UF: <input type="text" required name="ValUF"><br><br>
   		<input type="submit" value="Calcular valor en $">
		<br><br><br>
		<?php echo "Valor de UF en $".number_format(Valor_UF, 2, ',', '.');?>
   </form>
<?php
	echo "El valor de UF(".$_POST['ValUF']."): ".$total;
?>
  </body>
</html>