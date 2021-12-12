<?php
  $archivo = 'docentes.txt';
  /* se verifica que el archivo exista en caso contrario emite una advertencia
     que no encuentr el archivo */
  if (file_exists($archivo)) {
   echo "El Archivo de texto se llama $archivo";
   echo "<br>";
   /* se abre e archivo en modalidad de lectura *.
      fopen($archivo, "r");
   /* se abre el archivo en solo lectura */
  $gestor = @fopen($archivo, "r");
  if ($gestor) {
   while (($bufer = fgets($gestor, 10000)) !== false) {
   echo $bufer;
      }
   }
   /* error al leer los datos del archivo */
   if (!feof($gestor)) {
   echo "Error: fallo inesperado de fgets()\n";
   }
   /* se cierra la conexion con el archivo */
   fclose($gestor);
}
?>
