<?php

function mostrarError($errores, $campo) {
    $alert = '';
    if (isset($errores[$campo]) && !empty($campo)) {
        $alert = "<div class='alert alert-danger'>" . $errores[$campo] . '</div>';
    }

    return $alert;
}

function borrarErrores() {
    $borrado = false;

    if (isset($_SESSION['errores'])) {
        $_SESSION['errores'] = null;
        $borrado = true;
    }

    if (isset($_SESSION['errores_entrada'])) {
        $_SESSION['errores_entrada'] = null;
        $borrado = true;
    }

    if (isset($_SESSION['completado'])) {
        $_SESSION['completado'] = null;
        $borrado = true;
    }

    return $borrado;
}
