<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 6</title>
    </head>
    <body>
        <?php
        /**
         * Ejercicio 6. Mostrar una tabla de HTML con las tablas de multiplicar del 1 al 10.
         */
        echo "<h1>Tablas de Multiplicar del 1 al 10</h1>";
        echo "<table border='1'> <tr>"; // inicio de la tabla
        
        echo "<tr>"; // inicio de la fila 1 de celdas
            for($header = 1; $header <= 10; $header++) {
                echo "<td>Tabla del $header</td>";
            }
        echo "</tr>"; // cierre fila 1 de celdas
        
        echo "<tr>"; // inicio de la fila 2 de celdas
            for($i = 1; $i <= 10; $i++) {
                echo "<td>";
                    for($x = 1; $x <= 10; $x++) {
                        echo "$i x $x = ".($i*$x)."<br/>";
                    }
                echo "</td>";                
            }
            
        echo "</tr>"; // cierre fila 2 de celdas
        
        echo "</table>"; // fin de la tabla
        ?>
    </body>
</html>




