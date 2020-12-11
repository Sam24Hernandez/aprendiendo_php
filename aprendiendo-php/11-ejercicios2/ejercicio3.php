<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicios 2 Bloque</title>
    </head>
    <body>
        <?php
        /**
         * Ejercicio 3. Programa que compruebe si una variable esta vacía y si lo está.
         * Rellenarla con texto en minusculas y mostrarlo en mayusculas y negrita.
         */
        $text = "";
        
        if(empty($text)) {
            $text = "hola soy el texto en minusculas de la variable text";
            $textMAYUS = strtoupper($text);
            
            echo "<strong>$textMAYUS</strong>";
        }            
        ?>
    </body>
</html>



