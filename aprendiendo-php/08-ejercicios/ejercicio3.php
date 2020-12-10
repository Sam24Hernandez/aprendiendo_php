<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 3</title>
    </head>
    <body>
        <?php
        /**
         * Ejercicio 3. Escribir un programa que imprima por pantalla los cuadrados
         * (un numero multiplicado por si mismo) de los 40 primeros numeros naturales.
         */
        $contador = 0;
        while($contador <= 40) {
            $cuadrado = $contador * $contador;            
            echo "<h3>El cuadrado de $contador es $cuadrado</h3>";
            
            $contador++;
        }
        ?>
    </body>
</html>



