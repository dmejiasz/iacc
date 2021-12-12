<!DOCTYPE html>
<html lang="en">
<head>
	<title>Semana 7</title>
</head>
<body>
<header class="principal">
 <h1 style="color:#FF0000">Formulario de contacto</h1>
 Si deseas ponerte en contacto con nosotros, rellena el formulario y te responderemos lo antes posible.<br><br>
</header>
 <section class="principal">
 <form method="post" action="index.php">
 
	<table align="left" width="40%" border="0" cellspacing="0">
		<tr>
			<td colspan="2" align="center">(*) Campo obligatorio</td>
		</tr>
		<tr>
			<td rowspan="5" WIDTH="60" HEIGHT="60"><input type="image" name="personas" src="personal.png" alt="Contacto"></td>
		</tr>
		<tr>
			<td>
				<label for="nombre">(*) Nombre:</label>
				<input id="nombre" name="nombre" placeholder="Nombre completo" required>
			</td>
		</tr>
		<tr>
			<td>
				<label for="email">(*) Email:</label>			
				<input id="email" name="email" type="email" placeholder="ejemplo@email.com" required>
			</td>
		</tr>
		<tr>
			<td>
				<label for="nombre">Sexo:</label>				
				<select name="sexo" style="width: 400px; height:40px; border:2px solid #f6f6f6; padding:10px; margin-top:5px; font-size:16px">
					<option disabled selected>Selecciona una opcion</option>
					<option value="1">Hombre</option>
					<option value="2">Mujer</option>
					<option value="3">No especifica</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<label for="nombre">Telefono:</label>				
				<input id="telefono" name="telefono" placeholder="Telefono" required>
			</td>
		</tr>
		<tr>
			<td rowspan="3" WIDTH="60" HEIGHT="60"><br><br><input type="image" name="ciudad" src="ciudad.png" alt="Mas Detalles"></td>
		</tr>

		<tr>
			<td><br><br>
				<label for="ciudad">Ciudad:</label>			
				<input id="ciudad" name="ciudad" placeholder="Ciudad" required>
			</td>
		</tr>
		<tr>
			<td>
				<label for="pais">País:</label>				
				<input id="pais" name="pais" placeholder="Pais" required>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<textarea id="consulta" name="consulta" rows="8" cols="80" placeholder="Cuentanos tu duda"></textarea>
				<input id="copia" name="copia" type="checkbox" value="copia">Enviarme una copia<br>
				<input id="submit" name="submit" type="submit" value="Enviar consulta">
			</td>
		</tr>
	</table>
</form>
 </section>
</body>
</html>
