<!DOCTYPE html>
<html>
<head>
	<title>Pagina Dinamica Sencilla</title>
	<script src="main.js"></script>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Mi página dinámica</h1>
	<p id="mensaje"></p>
	<button onclick="cambiarMensaje()">Cambiar mensaje</button>
	<?php
	if(isset($_GET['nombre'])) {
		echo "<h1>Hola " . $_GET['nombre'] . "</h1>";
	} else {
		echo "<h1>Hola desconocido</h1>";
	}
	?>
</body>
</html>
