<?php
$lat = 1; 
$lon = -1; 
$api_key = 'b5cfc4f029fcb3b35ddb5569055ff2a4'; 

$api_url_today = "https://api.openweathermap.org/data/2.5/onecall?lat=$lat&lon=$lon&units=metric&exclude=minutely,hourly&appid=$api_key";
$ch_today = curl_init();
curl_setopt($ch_today, CURLOPT_URL, $api_url_today);
curl_setopt($ch_today, CURLOPT_RETURNTRANSFER, true);
$response_today = curl_exec($ch_today);
curl_close($ch_today);
$weather_data_today = json_decode($response_today, true);

//El tiempo y humedad (hoy y el 15 de Julio del 2021)
$api_url_july_15 = "https://api.openweathermap.org/data/2.5/onecall/timemachine?lat=$lat&lon=$lon&dt=1626345600&units=metric&appid=$api_key";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $api_url_july_15);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response_july_15 = curl_exec($ch);
curl_close($ch);
$weather_data_july_15 = json_decode($response_july_15, true);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Información del Clima</title>
</head>
<body>
	<h1>Información del Clima</h1>
    <h2>Hoy</h2>
    //Una descripción del tiempo en esa ubicación
	<p><strong>Ubicación:</strong> <?php echo $weather_data['timezone']; ?></p>
	<p><strong>Temperatura:</strong> <?php echo $weather_data['current']['temp']; ?> °C</p>
	<p><strong>Descripción:</strong> <?php echo $weather_data['current']['weather'][0]['description']; ?></p>
	<p><strong>Humedad:</strong> <?php echo $weather_data['current']['humidity']; ?> %</p>
	<p><strong>Viento:</strong> <?php echo $weather_data['current']['wind_speed']; ?> km/h</p>
	<p><strong>Sensación Térmica:</strong> <?php echo $weather_data['current']['feels_like']; ?> °C</p>

    //El tiempo y humedad (hoy y el 15 de Julio del 2021)
    <h2>15 de Julio de 2021</h2>
	<p><strong>Ubicación:</strong> <?php echo $weather_data_july_15['timezone']; ?></p>
	<p><strong>Temperatura:</strong> <?php echo $weather_data_july_15['current']['temp']; ?> °C</p>
    //Presión Atmosférica y porcentaje de nubosidad (hoy y el 15 de Julio del 2021)
    <p><strong>Presión atmosférica:</strong> <?php echo $weather_data_july_15['current']['pressure']; ?> hPa</p>
	<p><strong>Porcentaje de nubosidad:</strong> <?php echo $weather_data_july_15['current']['clouds']; ?> %</p><p><strong>Descripción:</strong> <?php echo $weather_data_july_15['current']['weather'][0]['description']; ?></p>
	<p><strong>Humedad:</strong> <?php echo $weather_data_july_15['current']['humidity']; ?> %</p>
	<p><strong>Viento:</strong> <?php echo $weather_data_july_15['current']['wind_speed']; ?> km
</body>
</html>
