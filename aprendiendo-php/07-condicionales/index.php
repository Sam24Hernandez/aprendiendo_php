<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>PHP - Condicionales</title>
    </head>
    <body>
        <?php
        /**
         * Todo script PHP está construido según una serie de sentencias.
         * Una sentencia puede ser una asignación, una llamada de función, un ciclo, una sentencia
         * condicional o incluso una sentencia vacía.
         * Tenemos condicionales como:
         * if
         * else
         * elseif/else if
         * while / do-while
         * for / foreach
         * break
         * switch
         * goto
         */
        // IF - Permite la ejecución condicional de valores booleanos.
        // ELSE - Se extiende una sentencia if para ejecutar un valor FALSE
        echo "<h2>Sentencia If / ELSE</h2>";
        $color = 'verde';

        if ($color == 'rojo') {
            echo "El color es rojo";
        } else {
            echo "El color no es rojo, es verde";
        }
        echo "<br>";
        $year = 2020;
        if ($year == 2020) {
            echo "Estamos en 2020.";
        } else {
            echo "No estamos en el 2020";
        }
        echo "<br>";
        // ELSE-IF - Es una combinación de if y else.
        echo "<h2>Sentencia ELSEIF</h2>";
        $a = 5;
        $b = 10;
        if ($a > $b) {
            echo $a . " es mayor que " . $b;
        } elseif ($a == $b) {
            echo $a . " igual " . $b;
        } else {
            echo $a . " no es ni mayor ni igual a " . $b;
        }
        ?>
        <!-- 
        Sintaxis Alternativa:
        PHP ofrece una sintaxis alternativa para algunas sentencias, como:
        if, while, for, foreach y switch. Se cambia la apertura de llaves
        por dos puntos (:) y la llave de cierre por endif.
        -->
        <?php if ($a == 5): ?>
            A es igual a 5
        <?php endif; ?>
        <h2>Bucle WHILE</h2>
        <?php
        /**
         * While - Los bucles while son el tipo más sencillo de bucle.
         * while (expr)
         *      sentencia
         * 
         */
        $i = 1;
        while ($i <= 10) {
            echo $i++;/**
             * El valor presentado seria $i antes
             * del incremento (post-incremento)
             */
        }
        ?>
        <br />
        <?php
        /** Ejemplo 2 */
        $arr = array("naranja", "banana", "manzana", "fresa");

        $i = 0;
        while ($i < count($arr)) {
            $a = $arr[$i];
            echo $a . "\n";
            $i++;
        }

        /**
         * Do-While - Similares a los bucles while, excepto que la expresión
         * verdadera es verificada al final de cada iteración en lugar
         * que al principio.
         */
        echo "<h2>Bucle DO-WHILE</h2>";
        $i = 10;
        $factor = 10;
        $minimum_limit = 100;
        do {
            if ($i > 5) {
                echo "i no es lo suficientemente grande";
                break;
            }
            $i *= $factor;
            if ($i < $minimum_limit) {
                break;
            }
            echo "i está bien";

            /* procesar i */
        } while (0);
        ?>
        <h2>Bucle FOR</h2>
        <?php
        /**
         * Los bucles for son los más complejos en PHP.
         * for (expr1; expr2; expr3)
         *      sentencia
         * La primera expresión es evaluada(ejecutada) una vez incondicionalmente al comienzo del bucle.
         * En el comienzo de cada iteración, se evalua la segunda expresión. Si se evalúa como TRUE, el bucle
         * continúa y se ejcutan la sentencia anidada. Si se evalúa como FALSe, termina la ejecución del bucle.
         * Al final de cada iteración, se evalua la tercera expresión.
         */
        /* ejemplo 1 */
        for ($i = 1; $i <= 10; $i++) {
            echo $i;
        }
        echo "<br/>";
        /* ejemplo 2 */
        for ($i = 1;; $i++) {
            if ($i > 10) {
                break;
            }
            echo $i;
        }
        ?>

        <h2>Bucle FOREACH</h2>
        <?php
        /**
         * El constructor foreach proporciona un modo sencillo de iterar
         * sobre arrays. Solo funciona sólo sobre arrays y objetos.
         * foreach (expresion_array as $valor)
         *      sentencias
         * foreach (expresion_array as $clave => $valor)
         *      sentencias
         */
        $a = array(1, 2, 3, 17);

        foreach ($a as $v) {
            echo "Valor actual de \$a: $v.\n<br/>";
        }

        /* Ejemplo 2 de foreach: valor (con su notación de acceso manual impreso con fines ilustrativos) */

        $a = array(1, 2, 3, 17);

        $i = 0; /* sólo para efectos ilustrativos */

        foreach ($a as $v) {
            echo "\$a[$i] => $v.\n";
            $i++;
        }
        echo "<br/>";
        /* Utilizando arrays anidados con list() */
        $array = [
                [1, 2],
                [3, 4],
        ];

        foreach ($array as list($a, $b)) {
            echo "A: $a; B: $b\n";
        }
        ?>

        <h2>BREAK</h2>
        <?php
        /**
         * break finaliza la ejecución de la estructura,
         * for, foreach, while, do-while o switch en curso.
         */
        while (true) {
            foreach ([1, 2, 3] as $value) {
                echo 'ok<br>';
                break(1); // Fatal error: Cannot 'break' levels
            }
            echo 'no se ejecutara';
            break;
        }
        echo '<h2>Continue</h2>';
        /**
         * continue se utiliza dentro de las estructuras iterativas para saltar
         * el resto de la iteración actual del bucle y continuar la ejecución
         * en la evaluación de la condición, para luego comenzar la siguiente iteración.
         */
        for ($i = 0; $i < 5; ++$i) {
            if ($i == 2)
                continue;
            print "$i\n";
        }

        echo '<h2>Switch</h2>';
        /**
         * La sentencia Switch es similar a una serie de sentencias IF
         * en la misma expresión.
         */
        echo '<h3>Sentencia If</h3>';
        $i = 1;
        if ($i == 0) {
            echo "i es igual a 0";
        } elseif ($i == 1) {
            echo "i es igual a 1";
        } elseif ($i == 2) {
            echo "i es igual a 2";
        }
        echo "<br>";
        echo '<h3>Sentencia Switch</h3>';
        $i = 567567;
        switch ($i) {
            case 0:
                echo "i es igual a 0";
                break;
            case 1:
                echo "i es igual a 1";
                break;
            case 2:
                echo "i es igual a 2";
                break;
            default:
                echo "i no es igual a 0, 1 ni 2";
        }
        ?>
        <h2>GOTO</h2>
        <?php
        /**
         * El operador GOTO puede ser usado para saltar a otra sección
         * en el programa. El punto de destino es especificado mediante
         * una etiqueta seguida de dos puntos y la instrucción es dada
         * como goto seguida de la etiqueta de destino deseado.
         */
        goto a;
        echo 'Foo';
        
        a: 
            echo 'Bar';
        
        echo '<br>';
        for($i = 0, $j = 50; $i < 100; $i++) {
            while($j--) {
                if ($j == 17) goto end;
            }
        }
        echo "i = $i";
        end:
        echo 'j alcanzó 17';
        ?>

    </body>
</html>

