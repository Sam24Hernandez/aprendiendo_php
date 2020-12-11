<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicios 2 Bloque</title>
    </head>
    <body>
        <?php

        /**
         * Ejercicio 1. Hacer un programa en PHP que tenga un array con 8 numeros enteros
         * y que haga lo siguiente:
         * - Recorrerlo y mostrarlo
         * - Ordenarlo y mostrarlo
         * - Mostrar su longitud
         * - Buscar algún elemento
         */
        // Función
        function mostrarArray($numeros) {
            $resultado = "";

            foreach ($numeros as $numero) {
                $resultado .= $numero."<br/>\n";                
            }
            return $resultado;
        }

        // Crear el array
        $numeros = array(12, 24, 28, 36, 26, 16, 99, 100);

        // Recorrer y mostrar
        echo "<h1>Recorrer y Mostrar</h1>";
        echo mostrarArray($numeros);

        // Ordenarlo y mostrarlo
        echo "<h1>Ordenarlo y Mostrar</h1>";
        sort($numeros);
        echo mostrarArray($numeros);
        
        // Mostrar su longitud
        echo "<h1>Mostrar su longitud de elementos</h1>";
        var_dump(count($numeros));
        
        // Búsqueda en el array
        $busqueda = 24;
        echo "<h1>Buscar en el array: $busqueda</h1>";
        
        $search = array_search($busqueda, $numeros);
        var_dump($search);
        if(!empty($search)) {
            echo "<h3>El número buscado existen en el array, en el índice: $search</h3>";
        } else {
            echo "No existe el número buscado.";
        }
        ?>
    </body>
</html>

