<?php
if (isset($_POST)) {
    
    // Conexión a la base de datos
    require_once 'includes/connection.php';
    
    // Iniciar Sesión
    if(!isset($_SESSION)) {
        session_start();
    }

    // Recoger los valores del formulario de registro    
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
    $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;

    // Array de errores
    $errores = array();

    // Validar los datos antes de guardarlos en la base de datos
    // Validar campo nombre
    if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
        $nombre_validado = true;
    } else {
        $nombre_validado = false;
        $errores['nombre'] = "El nombre ingresado no es válido.";
    }

    // Validar campo apellido
    if (!empty($apellido) && !is_numeric($apellido) && !preg_match("/[0-9]/", $apellido)) {
        $apellido_validado = true;
    } else {
        $apellido_validado = false;
        $errores['apellido'] = "El apellido o los apellidos ingresados son inválidos";
    }

    // Validar el campo email
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_validado = true;
    } else {
        $email_validado = false;
        $errores['email'] = "El email no es válido, ingresa un email válido & único.";
    }

    // Validar campo contraseña
    if (!empty($password)) {
        $password_validado = true;
    } else {
        $password_validado = false;
        $errores['password'] = "La contraseña es obligatoria.";
    }
    
    $guardar_usuario = false;
    
    if(count($errores) == 0) {
        $guardar_usuario = true;
        
        // Cifrar la contraseña
        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);
        
        // INSERTAR USUARIO EN LA TABLA(RELACIÓN) DE USUARIOS EN LA BDDS
        $sql = "INSERT INTO usuarios VALUES(NULL, '$nombre', '$apellido', '$email', '$password_segura', CURDATE());";
        $guardar = mysqli_query($db, $sql);
        
        if($guardar) {
            $_SESSION['completado'] = "El registro se ha completado con éxito.";
        } else {
            $_SESSION['errores']['general'] = "Hubo un error al registrar el usuario :(";
        }
        
    } else {
        $_SESSION['errores'] = $errores;        
    }
}

header('Location: index.php');

