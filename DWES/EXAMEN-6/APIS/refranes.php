//Crear un API de refranes españoles . Devolverá un refrán aleatorio, en texto puro de entre 10 escogidos previamente. Endpoint: /api/refranes . Formato texto plano.
<?php
$refranes = array(
    "A buen entendedor pocas palabras bastan",
    "A caballo regalado no le mires el dentado",
    "A falta de pan, buenas son tortas",
    "A quien madruga, Dios le ayuda",
    "Cada loco con su tema",
    "De tal palo, tal astilla",
    "Dime con quién andas y te diré quién eres",
    "El que ríe último, ríe mejor",
    "Más vale prevenir que curar"
);

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $indice = rand(0, count($refranes) - 1);
    header('Content-Type: text/plain');
    echo $refranes[$indice];
} else {
    http_response_code(405);
    header('Allow: GET');
    echo 'Método no permitido';
}
?>