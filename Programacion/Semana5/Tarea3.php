<html>      
	<head>
          <title>Tarea 3 - Semana 5</title>
       </head>
  <body>
<?php
/*
Diseñe un programa que reciba un valor entre 1 y 12 y muestre el mes del año al que
equivale, tomando en cuenta que enero es el mes 1 y diciembre el mes 12. Declare la
variable del dato de entrada y asigne un valor de referencia como prueba.
*/
	$mes="";
	
	if(!empty($_POST['valor']))
	{
	  	if($_POST['valor']==1){
			$mes="Enero";
		}
		elseif($_POST['valor']==2){
			$mes="Febrero";
		}
		elseif($_POST['valor']==3){
			$mes="Marzo";
		}
	  	elseif($_POST['valor']==4){
			$mes="Abril";
		}
		elseif($_POST['valor']==5){
			$mes="Mayo";
		}
		elseif($_POST['valor']==6){
			$mes="Junio";
		}
	  	elseif($_POST['valor']==7){
			$mes="Julio";
		}
		elseif($_POST['valor']==8){
			$mes="Agosto";
		}
		elseif($_POST['valor']==9){
			$mes="Septiembre";
		}
	  	elseif($_POST['valor']==10){
			$mes="Octubre";
		}
		elseif($_POST['valor']==11){
			$mes="Noviembre";
		}
		elseif($_POST['valor']==12){
			$mes="Diciembre";
		}
		else {
			$mensaje = "El numero " . $_POST['valor'] . " ingresado es incorrecto, solo numeros de 1 al 12, vuelva a intentar";
			echo $mensaje;
		}					
	}	
?>
    <form method="post" action=""> 
		Ingrese numero de mes de 1 a 12: <input type="number" required name="valor"><br><br>
   		<input type="submit" value="Entregar mes">
		<br><br><br>
		<?php 
			if(!empty($mes)){
				print "El mes ". $_POST['valor'] . " corresponde a :". $mes;
			}
		?>
   </form>
  </body>
</html>