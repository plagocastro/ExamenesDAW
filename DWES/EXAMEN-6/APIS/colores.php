//Crear un API que devuelva un color aleatorio de una lista previa (en texto utilizable como valor de color CSS). Endpoint: /api/colores . Formato texto plano.
<?php
$colores = array("red", "green", "blue", "yellow", "orange", "purple", "pink", "black", "white");

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $indice = rand(0, count($colores) - 1);
    header('Content-Type: text/plain');
    echo $colores[$indice];
} else {
    http_response_code(405);
    header('Allow: GET');
    echo 'Método no permitido';
}
?>