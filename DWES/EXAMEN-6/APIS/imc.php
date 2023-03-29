//Crea un API que me devuelva el IMC de una persona (muy bien explicado aquí ). Endpoint /apis/imc/. Formato texto plano (tendrás que resolver cómo enviar los parámetros, hay diferentes opciones). Ideal en el url.
<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $peso = isset($_GET['peso']) ? $_GET['peso'] : null;
    $altura = isset($_GET['altura']) ? $_GET['altura'] : null;

    if (!$peso || !$altura) {
        http_response_code(400);
        echo 'Parámetros incorrectos';
        exit;
    }

    $peso = floatval($peso);
    $altura = floatval($altura);
    if ($peso <= 0 || $altura <= 0) {
        http_response_code(400);
        echo 'Parámetros incorrectos';
        exit;
    }

    $imc = $peso / ($altura * $altura);
    header('Content-Type: text/plain');
    echo $imc;

} else {
    http_response_code(405);
    header('Allow: GET');
    echo 'Método no permitido';
}
?>
