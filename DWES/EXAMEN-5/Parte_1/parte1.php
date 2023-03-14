<!DOCTYPE html>
<html>
<head>
	<title>POO Básico</title>
</head>
<body>
	<?php
	// Incluimos el archivo con la clase Vehiculo
	include 'vehiculos.inc.php';

	// Creamos dos objetos de la clase Vehiculo
	$v1 = new Vehiculo("ABC123", 3);
	$v2 = new Vehiculo("DEF456", 5);

	// Mostramos la matrícula y la edad del primer vehículo
	$v1->ver();

	// Mostramos toda la información del segundo vehículo
	$v2->ver_completo();

	// Actualizamos la matrícula del segundo vehículo
	$v2->actualizar_matricula("GHI789");

	// Mostramos la matrícula actualizada del segundo vehículo
	echo "La matrícula actualizada de v2 es: " . $v2->matr;
	?>
</body>
</html>