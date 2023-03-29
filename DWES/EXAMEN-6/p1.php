<?php
$api_url = 'https://api.chucknorris.io/jokes/random';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$joke = json_decode($response, true);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Chiste de Chuck Norris</title>
</head>
<body>
	<h1>Chiste de Chuck Norris</h1>
	//Me muestre un chiste aleatorio (chiste, la fecha de actualización y la categoría a la que pertenece).
	<p><?php echo $joke['value']; ?></p>
	<p><strong>Actualizado en:</strong> <?php echo $joke['updated_at']; ?></p>
	<p><strong>Categoría:</strong> <?php echo $joke['categories'][0]; ?></p>
	//Que me muestre una lista de todas las categorías disponibles. La lista tiene un url para mostrar un chiste de esa categoría en concreto
	<ul>
		<?php foreach ($categories as $category) { ?>
			<li>
				<a href="https://api.chucknorris.io/jokes/random?category=<?php echo $category; ?>">
					<?php echo $category; ?>
				</a>
			</li>
		<?php } ?>
	</ul>
	//Y si quiero, que me muestre un chiste aleatorio, de una búsqueda por un texto concreto (por ejemplo «spain»)
	<h1>Chiste de Chuck Norris con spain</h1>
	<p><?php echo $joke['value']; ?></p>
	<p><strong>Actualizado en:</strong> <?php echo $joke['updated_at']; ?></p>
	<?php if (!empty($joke['categories'])) { ?>
		<p><strong>Categoría:</strong> <?php echo $joke['categories'][0]; ?></p>
	<?php } ?>
</body>
</html>
