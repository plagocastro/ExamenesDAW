<?php

function validarNombre($nombre) {
    if (!preg_match('/^[a-zA-Z ]+$/', $nombre)) {
        return 'El nombre solo puede contener letras y espacios';
    }
    return '';
}

function validarEmail($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return 'Introduce un email válido';
    }
    return '';
}

function validarTelefono($telefono) {
    if (!preg_match('/^[0-9]{9}$/', $telefono)) {
        return 'El teléfono debe contener 9 dígitos';
    }
    return '';
}

function validarCV($archivo) {
    if (!is_uploaded_file($archivo['tmp_name'])) {
        return 'Error al subir el archivo';
    }
    return '';
}
?>