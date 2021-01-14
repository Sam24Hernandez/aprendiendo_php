<?php

if (isset($_POST)) {

    // Conexión a la base de datos
    require_once 'includes/connection.php';

    // Recorger los valores del formulario de actulizacion
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    $apellido = isset($_POST['apellido']) ? mysqli_real_escape_string($db, $_POST['apellido']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;

    // Array de errores
    $errores = array();

    // Validar los datos antes de guardarlos en la base de datos
    // Validar campo nombre
    if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
        $nombre_validado = true;
    } else {
        $nombre_validado = false;
        $errores['nombre'] = "El nombre no es válido";
    }

    // Validar apellidos
    if (!empty($apellido) && !is_numeric($apellido) && !preg_match("/[0-9]/", $apellido)) {
        $apellidos_validado = true;
    } else {
        $apellidos_validado = false;
        $errores['apellido'] = "El apellido o apellidos son inválidos.";
    }

    // Validar el email
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_validado = true;
    } else {
        $email_validado = false;
        $errores['email'] = "El email no es válido";
    }

    $guardar_usuario = false;

    if (count($errores) == 0) {
        $usuario = $_SESSION['usuario'];
        $guardar_usuario = true;

        // COMPROBAR SI EL EMAIL YA EXISTE
        $sql = "SELECT id, email FROM usuarios WHERE email = '$email'";
        $isset_email = mysqli_query($db, $sql);
        $isset_user = mysqli_fetch_assoc($isset_email);

        if ($isset_user['id'] == $usuario['id'] || empty($isset_user)) {
            // ACTULIZAR USUARIO EN LA TABLA USUARIOS DE LA BBDD

            $sql = "UPDATE usuarios SET " .
                    "nombre = '$nombre', " .
                    "apellido = '$apellido', " .
                    "email = '$email' " .
                    "WHERE id = " . $usuario['id'];
            $guardar = mysqli_query($db, $sql);


            if ($guardar) {
                $_SESSION['usuario']['nombre'] = $nombre;
                $_SESSION['usuario']['apellido'] = $apellido;
                $_SESSION['usuario']['email'] = $email;

                $_SESSION['completado'] = "Tus datos se han actualizado con éxito";
            } else {
                $_SESSION['errores']['general'] = "¡Fallo al guardar el actulizar tus datos!";
            }
        } else {
            $_SESSION['errores']['general'] = "¡El usuario ya existe!";
        }
    } else {
        $_SESSION['errores'] = $errores;
    }
}

header('Location: mis-datos.php');

