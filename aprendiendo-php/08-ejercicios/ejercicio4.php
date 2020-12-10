<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 4</title>
    </head>
    <body>
        <?php
        /**
         * Ejercicio 4. Recoger dos numeros por la url (Parametros GET) y hacer
         * todas las operaciones básicas de una calculadora(suma, resta, multiplicación y división).
         * de esos dos numeros
         */
        // http://localhost/PHP/aprendiendo-php/08-ejercicios/ejercicio4.php/?num1=2&num2=4
        if(isset($_GET['num1']) && isset($_GET['num2'])) {
            
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            
            echo "<h1>Calculadora</h1>";
            echo "Suma: ".($num1 + $num2). "<br />";
            echo "Resta: ".($num1 - $num2). "<br />";
            echo "Multiplicación: ".($num1 * $num2). "<br />";
            echo "División: ".($num1 / $num2);
            
        } else {
            echo "<h1>Introduce correctamente los valores por la URL</h1>";
        }
        ?>
    </body>
</html>




