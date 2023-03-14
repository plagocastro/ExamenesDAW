<!DOCTYPE html>
<html>
<head>
	<title>Extrayendo información de una página web externa</title>
</head>
<body>
	<?php
	// URL de la página web externa
	$url = "https://www.example.com";

	// Carga la página web externa como si fuera un recurso (archivo)
	$contenido = file_get_contents($url);

	// Extrae el texto de las etiquetas H1
	preg_match_all('/<h1[^>]*>(.*?)<\/h1>/si', $contenido, $matches);
	echo "<h1>Texto de las etiquetas H1:</h1>";
	foreach ($matches[1] as $match) {
		echo "<p>" . $match . "</p>";
	}

	// Extrae el contenido de los elementos span donde el atributo class sea "caption-text"
	preg_match_all('/<span[^>]*class="caption-text"[^>]*>(.*?)<\/span>/si', $contenido, $matches);
	echo "<h1>Contenido de los elementos span con class=\"caption-text\":</h1>";
	foreach ($matches[1] as $match) {
		echo "<p>" . $match . "</p>";
	}

	// Extrae los enlaces a páginas web externas (no enlaces internos)
	preg_match_all('/<a\s+(?:[^>]*?\s+)?href=(["\'])(.*?)\1/is', $contenido, $matches);
	echo "<h1>Enlaces a páginas web externas:</h1>";
	foreach ($matches[2] as $match) {
		if (parse_url($match, PHP_URL_HOST) != parse_url($url, PHP_URL_HOST)) {
			echo "<p>" . $match . "</p>";
		}
	}
	?>
</body>
</html>
