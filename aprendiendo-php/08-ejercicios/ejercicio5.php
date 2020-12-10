<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 5</title>
    </head>
    <body>
        <?php
        /**
         * Ejercicio 5. Escribir un programa que muestre todos los numeros entre dos numeros
         * que nos lleguen por la URL($_GET)
         */
        if(isset($_GET['num1']) && isset($_GET['num2'])) {
            
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            
            if($num1 < $num2) {
                for($i = $num1; $i <= $num2; $i++) {
                    echo "<h4>$i</h4>";
                }
            } else {
                echo "<h1>El número 1 debe ser menor al numero 2</h1>";
            }
            
        } else {
            echo "<h1>Los parámetros GET no existen.</h1>";
        }
        ?>
    </body>
</html>



