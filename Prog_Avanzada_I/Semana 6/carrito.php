<?php
  session_start();
  //session_destroy();
  echo "<h3>CARRITO DE COMPRAS</h3>";
  if (isset($_SESSION["carrito"])) {
    foreach ($_SESSION["carrito"] as $indice => $arreglo) {
      echo "<hr>Producto: <strong>". $indice."</strong><br>";
      foreach ($arreglo as $key => $value) {
        echo $key. " : " .$value. "<br>";
      }
    }
  }else{
    echo "<script>alert('El carrito de compras se encuentra vacio');</script>";
  }
?>
<br>
<h3><a href="index.php">Regresar</a></h3>
