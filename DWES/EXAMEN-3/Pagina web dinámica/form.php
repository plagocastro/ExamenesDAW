<!DOCTYPE html>
<html>
<head>
	<title>Justificante de recepción</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Justificante de recepción</h1>
	<p>Los siguientes datos fueron recibidos:</p>

	<ul>
		<li><strong>Nombre:</strong> <?php echo $_POST['nombre']; ?></li>
		<li><strong>Email:</strong> <?php echo $_POST['email']; ?></li>
		<li><strong>Mensaje:</strong> <?php echo $_POST['mensaje']; ?></li>
		<li><strong>Archivo:</strong> <?php echo $_FILES['archivo']['name']; ?></li>
	</ul>
</body>
</html>
