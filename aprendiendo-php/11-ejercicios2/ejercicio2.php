<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicios 2 Bloque</title>
    </head>
    <body>
        <?php
        /**
         * Ejercicio 2. Escribir un programa que añada valores a un array mientras que su
         * longitud sea menor a 120 y luego mostrarlo por pantalla.
         */
        $coleccion = array();

        for ($i = 0; $i <= 120; $i++) {
            array_push($coleccion, "elemento - " . $i);
        }

        var_dump($coleccion);
        ?>
    </body>
</html>



