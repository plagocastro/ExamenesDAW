<?php
include 'validacion.php';

if (isset($_POST['submit'])) {

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $cv = $_FILES['cv'];
    $errorNombre = validarNombre($nombre);
    $errorEmail = validarEmail($email);
    $errorTelefono = validarTelefono($telefono);
    $errorCV = validarCV($cv);

    if ($errorNombre !== '') {
        echo "Error en el campo nombre: $errorNombre";
        exit;
    }
    if ($errorEmail !== '') {
        echo "Error en el campo email: $errorEmail";
        exit;
    }
    if ($errorTelefono !== '') {
        echo "Error en el campo teléfono: $errorTelefono";
        exit;
    }
    if ($errorCV !== '') {
        echo "Error en el campo CV: $errorCV";
        exit;
    }

    echo '<h2>Justificante de recepción</h2>';
    echo '<p>Nombre: ' . $nombre . '</p>';
    echo '<p>Email: ' . $email . '</p>';
    echo '<p>Teléfono: ' . $telefono . '</p>';
    echo '<p>CV: ' . $cv['name'] . '</p>';

} else {
    echo <<<FORMULARIO
    <!DOCTYPE html>
    <html>
    <head>
        <title>Formulario de contacto</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1>Formulario de contacto</h1>
        <form action="procesar.php" method="post" enctype="multipart/form-data">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required>
    
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
    
            <label for="telefono">Teléfono:</label>
            <input type="tel" name="telefono" id="telefono" required>
    
            <label for="asunto">Asunto:</label>
            <input type="text" name="asunto" id="asunto" required>
    
            <label for="mensaje">Mensaje:</label>
            <textarea name="mensaje" id="mensaje" rows="5" required></textarea>
    
            <label for="cv">Curriculum Vitae (PDF o Word):</label>
            <input type="file" name="cv" id="cv" required>
    
            <input type="submit" value="Enviar">
        </form>
    </body>
    </html>
    FORMULARIO;
}