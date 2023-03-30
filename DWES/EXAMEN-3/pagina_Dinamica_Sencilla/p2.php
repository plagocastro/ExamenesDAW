<?php
$ip = $_SERVER['REMOTE_ADDR'];
$host = $_SERVER['HTTP_HOST'];
$h = date('Y-m-d H:i:s');
$metodo = $_SERVER['REQUEST_METHOD'];
$qs = $_SERVER['QUERY_STRING'];
$html = <<<EXAMEN
<!DOCTYPE html>
<html>
<head>
	<title>Información de la petición</title>
</head>
<body>
	<p>Esta petición viene de la dirección ip cliente $ip y trae en la cabecera Host el valor $host. La fecha y hora de la petición es <b>$h</b>.</p>

	<p>Está usando el método http $metodo , y la cadena de consulta es <b>$qs</b></p>
</body>
</html>
EXAMEN;

echo $html;
?>
