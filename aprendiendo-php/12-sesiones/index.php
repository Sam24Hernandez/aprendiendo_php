<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>PHP - Sesiones</title>
    </head>
    <body>
        <?php
         /**
          * Sesión en PHP - Almacenar y persistir datos del usuario mientras
          * navega por la web hasta que se cierra sesión o cierra el navegador.
          */
        
        // Iniciar la sesión
        session_start();
        
        // Variable local
        $variable_normal = "Soy una cadena de texto";
        
        // Variable de sesión
        $_SESSION['variable_persistente'] = "HOLA SOY UNA SESIÓN ACTIVA";
        
        echo $variable_normal."<br/>";
        echo $_SESSION['variable_persistente'];
        ?>
    </body>
</html>

