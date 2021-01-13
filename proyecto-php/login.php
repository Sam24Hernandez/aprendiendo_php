<?php

// Iniciar sesión y la conexión a la bdds
require_once 'includes/connection.php';

// Recoger datos del formulario
if (isset($_POST)) {

    // Borrar error antiguo
    if (isset($_SESSION['error_login'])) {
        session_unset($_SESSION['error_login']);
    }

    // Recoger datos del formulario
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Consulta para comprobar las credenciales del usuario
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $login = mysqli_query($db, $sql);

    if ($login && mysqli_num_rows($login) == 1) {
        $usuario = mysqli_fetch_assoc($login);

        // Comprobar la contraseña
        $verify = password_verify($password, $usuario['password']);

        if ($verify) {
            // Utilizar una sesión para guardar los datos del usuario logueado
            $_SESSION['usuario'] = $usuario;
        } else {
            // Si algo falla enviar una sesión con el fallo
            $_SESSION['error_login'] = "No se pudo iniciar sesión, datos inválidos.";
        }
    } else {
        // mensaje de error
        $_SESSION['error_login'] = "No se pudo iniciar sesión, datos inválidos.";
    }
}

// Redirección al index.php
header('Location: index.php');



