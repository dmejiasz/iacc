<?php
 print "<pre>";
 print_r($_REQUEST);
 print "</pre>\n";

  $nombre = $_POST['nombre'];
  $fecha = $_POST['fecha'];
  $direccion = $_POST['direccion'];
  $telefono = $_POST['telefono'];
  $email = $_POST['email'];
  $estudios = $_POST['estudios'];
  $aegreso = $_POST['aegreso'];
  $mensaje = $_POST['mensaje'];

 /* nombre del achivo TXT */
   $archivo='docentes';
   $miarchivo=fopen($archivo.'.txt','wb');// nombre archivo, modo apertura W (Escritura)
   fwrite($miarchivo, // datos a escribir en el archivo
   "Rut: " .$rut.
   "Nombre Docente =" .$nombre.
   "Fecha de Ingreso =" .$fecha.
   "Dirección particular =" .$direccion.
   "Numero de telefono =" .$telefono.
   "Email =" .$email.
   "Carrera =" .$estudios.
   "Año de egreso =" .$aegreso.
   "Mensaje =" .$mensaje);
   echo "Tu a generado el arhico \"$archivo.txt\"";
   /* se cierra la conexion con el archivo */
   fclose($miarchivo);
?>
