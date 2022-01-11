<?php

class Auto{
  public $patente;
  public $motor;
  public $chasis;
  public $marca;
  public $modelo;
  public $anho;
  public $color;
  public $precio;

  public function __construct($p_patente,$p_motor,$p_chasis,$p_marca,$p_modelo,$p_anho,$p_color,$p_precio) {
    $this->patente =$p_patente;
    $this->motor =$p_motor;
    $this->chasis =$p_chasis;
    $this->marca =$p_marca;
    $this->modelo =$p_modelo;
    $this->anho =$p_anho;
    $this->color =$p_color;
    $this->precio =$p_precio;
  }

  public function __destruct() {
    echo '<p>Destructor de la clase ppal</p>';
  }

  public function mostrar(){
    echo '<p>Patente       :'. $this->patente .'</p>';
    echo '<p>Serie Motor   :'. $this->motor   .'</p>';
    echo '<p>Numero Chasis :'. $this->chasis  .'</p>';
    echo '<p>Marca         :'. $this->marca   .'</p>';
    echo '<p>Modelo        :'. $this->modelo  .'</p>';
    echo '<p>Año           :'. $this->anho    .'</p>';
    echo '<p>Color         :'. $this->color   .'</p>';
    echo '<p>Precio        :'. $this->precio  .'</p>';
  }
}
$Automovil = new Auto($_POST["patente"],
                      $_POST["motor"],
                      $_POST["chasis"],
                      $_POST["marca"],
                      $_POST["modelo"],
                      $_POST["anho"],
                      $_POST["color"],
                      $_POST["precio"]);

$Automovil->mostrar();

echo "<h3> Datos del vehículo visualizados con var_dump</h3>";
var_dump($Automovil);
?>