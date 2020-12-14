<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicios 3er Bloque</title>
    </head>
    <body>
        <?php
        /*
          Ejercicio 2.
         * 1. Una función
         * 2. Validar un email con filter_var
         * 3. Recoger variable por get y validarla
         * 4. Mostrar el resultado
         */
        
        function validarEmail($email) {
            $status = "No válido.";
            if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $status = "Válido";
            }
            
            return $status;
        }
        
        /**
         * Válido: http://localhost/PHP/aprendiendo-php/17-ejercicios3/ejercicio2.php/?email=sam.herco@24gmail.com
         * Inválido: http://localhost/PHP/aprendiendo-php/17-ejercicios3/ejercicio2.php/?email=sam.herco24gmail.com
         */
        
        if(isset($_GET["email"])) {
            echo validarEmail($_GET["email"]);
        } else {
            echo "Pasa por get un email...";
        }
        ?>
    </body>
</html>
