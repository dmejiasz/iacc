<?php
	// Creamos la class principal para re utiliza o heredar
	class Datos_Personales{
		public $nombre;
		public $apellidos;
		private $rut;
		private $direccion;
	
		public function __construct($dp_nombre, $dp_apellidos, $dp_rut, $direccion) {
			$this->nombre    = $dp_nombre;
			$this->apellidos = $dp_apellidos;
			$this->rut       = $dp_rut;
			$this->direccion = $direccion;
		}

		public function __destruct() {
			echo '<p>Destructor de la clase ppal</p>';
		}
	}
	
	class asignatura {
		public $anho;
		public $asignatura;
	
		function __construct($int_val1, $str_val2){
				$this ->anho       = $int_val1;
				$this ->asignatura = $str_val2;
			}
	}
	
	class actividad {
		public $actividad;
	
		function __construct($acti){
			$this ->actividad=$acti;
		}
	}
	
	// Creamos herencia de class principal
	class Estudiante extends Datos_Personales{

	}
	
	class Apoderado extends Datos_Personales{
	
	}
	
$Alumno1 = new Estudiante('Diego','Mejías','12-4','IACC #234');
var_dump($Alumno1);

$Apoderado1 = new Apoderado('Edgardo','Zapata','24-8','IACC #567');
var_dump($Apoderado1);

$Asignatura1 = new asignatura(2019,'Matematicas');
var_dump($Asignatura1);

$Asignatura2 = new asignatura(2020,'Programación');
var_dump($Asignatura2);

$Actividad1 = new Actividad('Natación');
var_dump($Actividad1);
?>