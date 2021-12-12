<?php
session_start();
?>
<!DOCTYPE html>
  <html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <script src="bootstrap/js/bootstrap.js"></script>
  <link rel="stylesheet" href="bootstrap/css/.css">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css">

  <title>Semana 6 - DMZ</title>
  </head>
  <body>
    <div class="row main-container middle-xs center-xs" >
      <div class="col-xs-11 col-lg-7">
        <div class="box">
          <header class="main-header"> </header>
          <div class="menu">
            <header class="text-center">
              <img src="img/logo.png" height="100">
              <h1 >Libreria Virtual</h1>
            </header>
            <div class="row center-xs">
              <div class="col-xs-10 col-sm-6 col-md-4 product " >
                <div class="card">
                  <img src="img/pegamento.png" alt="pegamento" style="width:70px;">
                  <form action="index.php" method="post">
                    <h3>Cola fría</h3>
                    <p>$2.000</p>
                    <input type="hidden" name="txtprecio" value="2000">
                    <input type="number" name="cant" value="1" style="width:30px;"><br>
                    <input type="hidden" name="txtproducto" value="pegamento">
                    <input type="submit" name="addshop" value="agregar">
                  </form>
                </div>
              </div>
              <div class="col-xs-10 col-sm-6 col-md-4 product " >
                <div class="card">
                  <img src="img/cuadernos.png" alt="cuadernos" style="width:120px;">
                  <form action="index.php" method="post">
                    <h3>Cuaderno</h3>
                    <p>$1000</p>
                    <input type="hidden" name="txtprecio" value="1000">
                    <input type="number" name="cant" value="1" style="width:30px;"><br>
                    <input type="hidden" name="txtproducto" value="cuaderno">
                    <input type="submit" name="addshop" value="agregar">
                  </form>
                </div>
              </div>
              <div class="col-xs-10 col-sm-6 col-md-4 product " >
                <div class="card">
                  <img src="img/lapices.png" alt="lapices" style="width:40px;">
                  <form action="index.php" method="post">
                    <h3>Lapices</h3>
                    <p>$700</p>
                    <input type="hidden" name="txtprecio" value="700">
                    <input type="number" name="cant" value="1" style="width:30px;"><br>
                    <input type="hidden" name="txtproducto" value="lapices">
                    <input type="submit" name="addshop" value="agregar">
                  </form>
                </div>
              </div>
              <div class="col-xs-10 col-sm-6 col-md-4 product " >
                <div class="card">
                  <img src="img/reglas.png" alt="Reglas" style="width:130px;">
                  <form action="index.php" method="post">
                    <h3>Reglas</h3>
                    <p>$900</p>
                    <input type="hidden" name="txtprecio" value="900">
                    <input type="number" name="cant" value="1" style="width:30px;"><br>
                    <input type="hidden" name="txtproducto" value="relgas">
                    <input type="submit" name="addshop" value="agregar">
                  </form>
                </div>
              </div>
              <div class="col-xs-10 col-sm-6 col-md-4 product " >
                <div class="card">
                    <img src="img/gomas.png" alt="gomas" style="width:130px;">
                    <form action="index.php" method="post">
                      <h3>Gomas de borrar</h3>
                      <p>$500</p>
                      <input type="hidden" name="txtprecio" value="10000">
                      <input type="number" name="cant" value="1" style="width:30px;"><br>
                      <input type="hidden" name="txtproducto" value="gomas">
                      <input type="submit" name="addshop" value="agregar">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a href="carrito.php"><img src="img/carrito.png" style="width:60px;"><br><h3>Visualizar Carrito</h3></a>
      </div>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-
  DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
  crossorigin="anonymous"></script>
  <?php
  if(isset($_REQUEST["addshop"])){
    $producto = $_REQUEST["txtproducto"];
    $cantidad = $_REQUEST["cant"];
    $precio = $_REQUEST["txtprecio"];
    $_SESSION["carrito"][$producto]["cant"] = $cantidad;
    $_SESSION["carrito"][$producto]["precio"] = $precio;
    }
  ?>
</body>
</html>
