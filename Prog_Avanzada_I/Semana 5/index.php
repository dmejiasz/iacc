<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
  $entrada = (isset($_POST['accion'])) ? $_POST['accion'] : null;
  switch ($entrada)
  {
    case 'grabar':
      include 'grabar.php';
      break;
    case 'leer':
      include 'leer.php';
      break;
    case 'eliminar':
      $archivo = 'docentes.txt';
      unlink($archivo);
      echo "El archivo \"$archivo\" se ha borrado exitosamente ";
      break;
    default:
      $mensaje = "Aún no hay datos para Grabar";
      break;
  }
?>
  <head>
    <meta charset="utf-8">
    <title>Docentes IACC 2021 - Semana 5</title>
    <link rel="stylesheet" type="text/css" href="css/formato_formulario.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body>

  <div class="container mt-3">
    <h2>Equipo Docente IACC - 2021</h2>
    <br>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#home">Ingreso de datos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu1">Leer registros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu2">Eliminación de Archivo</a>
      </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div id="home" class="container tab-pane active"><br>
        <h3>Ingreso de nuevos Docentes</h3>
        <div class="contact_form">
          <div class="formulario">
            <h1>Formulario de Ingreso</h1>
            <form action="" method="post">
              <p>
                <label for="nombre" class="colocar_nombre">Nombre Completo
                <span class="obligatorio">*</span>
                </label>
                <input type="text" name="nombre" id="nombre" required="obligatorio" placeholder="Escribe tu nombre completo">
              </p>
              <p>
                <label for="fecha" class="colocar_fecha">Fecha de nacimiento
                <span class="obligatorio">*</span>
                </label>
                <input type="date" id="start" name="fecha"
                       value="2021-10-01" min="1940-01-01" max="2021-01-01"
                       required="obligatorio">
              </p>
              <p>
                <label for="direccion" class="colocar_direcccion">Dirección
                <span class="obligatorio">*</span>
                </label>
                <input type="direccion" name="direccion" id="fecha" required="obligatorio" placeholder="Escriba dirección">
              </p>
              <p>
                <label for="telefono" class="colocar_telefono">Teléfono
                <span class="obligatorio">*</span>
                </label>
                <input type="telefono" name="telefono" id="telefono" required="obligatorio" placeholder="Escribe tu teléfono">
              </p>
              <p>
                <label for="email" class="colocar_email">Email
                  <span class="obligatorio">*</span>
                </label>
                <input type="email" name="email" id="email" required="obligatorio" placeholder="Escribe tu email">
              </p>
              <p>
                <label for="estudios" class="colocar_estudios">Estudios
                  <span class="obligatorio">*</span>
                </label>
                <input type="estudios" name="estudios" id="estudios" required="obligatorio" placeholder="Escribe lo que has estudiado">
              </p>
              <p>
                <label for="aegresoo" class="colocar_aegreso">Año de egreso
                  <span class="obligatorio">*</span>
                </label>
                <input type="aegreso" name="aegreso" id="aegreso" required="obligatorio" placeholder="Escribe año de egreso">
              </p>
              <p>
                <label for="mensaje" class="colocar_mensaje">Mensaje
                <span class="obligatorio">*</span>
                </label>
                <textarea name="mensaje" class="texto_mensaje" id="mensaje" required="obligatorio" placeholder="Deja aquí tu comentario..."></textarea>
              </p>

              <button type="submit" name="accion" id="grabar" value='grabar'><p>Grabar</p></button>

              <p class="aviso">
                <span class="obligatorio"> * </span>los campos son obligatorios.
              </p>
          </form>
        </div>
      </div>

      </div>
      <div id="menu1" class="container tab-pane fade"><br>
        <h4>Leer registros</h4>
        <form action="" method="post">
           <button type="submit" name="accion" id="leer" value='leer'><p>Leer Archivo</p></button>
      </form>
      </div>
      <div id="menu2" class="container tab-pane fade"><br>
         <h4>Eliminar Archivo</h4>
         <form action="" method="post">
            <button type="submit" name="accion" id="eliminar" value='eliminar'><p>Eliminar Archivo</p></button>
       </form>
      </div>
    </div>
  </div>
  </body>
</html>
