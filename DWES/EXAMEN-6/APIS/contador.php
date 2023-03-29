//Crea un API que devuelva el número de caracteres de una cadena de texto. Endpoint /apis/contador. Formato texto plano.
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cadena = file_get_contents('php://input');
    $num_caracteres = strlen($cadena);
    header('Content-Type: text/plain');
    echo $num_caracteres;
} else {
    http_response_code(405);
    header('Allow: POST');
    echo 'Método no permitido';
}
?>