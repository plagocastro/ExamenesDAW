<!DOCTYPE html>
<html>
<head>
	<title>Archivos PHP</title>
</head>
<body>
	<?php
	// Nombre del archivo
	$archivo = "ejemplo.txt";

	// Ruta del archivo
	$ruta = __DIR__ . DIRECTORY_SEPARATOR . $archivo;

	// Muestra el nombre y ruta del archivo
	echo "Nombre del archivo: " . $archivo . "<br>";
	echo "Ruta del archivo: " . $ruta . "<br><br>";

	// Detecta si el archivo existe
	if (file_exists($ruta)) {
		echo "El archivo existe.<br><br>";
	} else {
		echo "El archivo no existe.<br><br>";
	}

	// Carga el archivo en una variable
	$contenido = file_get_contents($ruta);

	// Crea un array con 4 elementos y los escribe, línea a línea en el archivo. Sobreescribe lo que había.
	$nuevo_contenido = array("Línea 1", "Línea 2", "Línea 3", "Línea 4");
	file_put_contents($ruta, implode("\n", $nuevo_contenido));

	// Lee la primera línea de un archivo csv de ejemplo, y crea un array con cada elemento (que va separado por comas)
	$csv_file = "ejemplo.csv";
	$csv_path = __DIR__ . DIRECTORY_SEPARATOR . $csv_file;
	if (file_exists($csv_path)) {
		$csv_array = array();
		$file_handle = fopen($csv_path, 'r');
		if ($file_handle) {
			$csv_line = fgets($file_handle);
			$csv_array = explode(',', $csv_line);
			fclose($file_handle);
		}
		echo "El primer elemento del archivo CSV es: " . $csv_array[0] . "<br>";
	} else {
		echo "El archivo CSV no existe.<br>";
	}
	?>
</body>
</html>