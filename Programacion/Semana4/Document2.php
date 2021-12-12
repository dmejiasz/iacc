<?php

$usuario  = "root";
$pass 	  = "";
$servidor = "localhost";
$NombreBD = "empleados";

$conexion = mysqli_connect($servidor, $usuario, $pass, $NombreBD);

	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("Error - No se ha podido conectar al servidor $servidor");
	
	// Selección del a base de datos a utilizar
	$db = mysqli_select_db( $conexion, $NombreBD ) or die ( "Error - No se ha podido conectar a la base de datos $NombreBD" );

	// establecer y realizar consulta. guardamos en variable.
	$consulta = "SELECT * FROM empleados";
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Error - No se ha logrado ejecutar consulta");
		
		/*
		inserción de cógido de la clinica
		*/
		
	// cerrar conexión de base de datos
	mysqli_close( $conexion );		
		
?>