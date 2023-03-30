<!DOCTYPE html>
<html>
<head>
	<title>Variables del array</title>
</head>
<body>
	<h1>Variables del array</h1>
	<p>El array $_SERVER contiene <?php echo count($_SERVER); ?> variables:</p>
	<table>
		<?php
		foreach ($_SERVER as $variable => $valor) {
			echo "<tr><td>$variable</td><td>$valor</td></tr>";
		}
		?>
	</table>
</body>
</html>
