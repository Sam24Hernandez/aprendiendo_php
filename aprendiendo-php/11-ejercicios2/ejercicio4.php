<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicios 2 Bloque</title>
    </head>
    <body>
        <?php
        /**
         * Ejercicio 4. Crear un script en PHP que tenga 4 variables:
         * una de tipo array, tipo string, tipo int y tipo boolean que imprima
         * un mensaje segun el tipo de variable que sea.
         */
        
        $array = array("Hola Mundo", 19);
        $title = "Aprendiendo PHP";
        $numero = 2020;
        $verdadero = true;
        
        if (is_array($array)) {
            echo "<h1>El array es un array</h1>";
        }
        
        if (is_string($title)) {
            echo "<h1>$title</h1>";
        }
        
        if (is_integer($numero)) {
            echo "<h2>Por finalizar el año $numero</h2>";
        }
        
        if (is_bool($verdadero)) {
            echo "<h2>¿Terminare el año soltero de nuevo? R. True</h2>";
        }
        ?>
    </body>
</html>




