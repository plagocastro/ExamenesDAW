//Crear un API similar al anterior, pero que devuelva tres refranes en un objeto JSON, con un campo extra que diga el orden: primero, seguro y tercero. Endpoint /api/refranes-json . Formato JSON
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
    $indices = array_rand($refranes, 3);
    $refranes_seleccionados = array(
        array("orden" => "primero", "refran" => $refranes[$indices[0]]),
        array("orden" => "segundo", "refran" => $refranes[$indices[1]]),
        array("orden" => "tercero", "refran" => $refranes[$indices[2]])
    );
    header('Content-Type: application/json');
    echo json_encode($refranes_seleccionados);
} else {
    http_response_code(405);
    header('Allow: GET');
    echo 'Método no permitido';
}
?>