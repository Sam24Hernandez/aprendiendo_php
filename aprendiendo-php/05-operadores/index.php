<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>PHP - Operadores</title>
    </head>
    <body>
        <?php
        /**
         * Un operador es algo que toma uno o más valores (o expresiones, en la jerga
         * de programación) y produce otro valor.
         */
        // Operadores aritméticos
        /**
         * Identidad: +$a
         * Negación: -$a
         * Adición: $a + $b
         * Sustracción: $a - $b
         * Multiplicación: $a * $b
         * División: $a / $b
         * Módulo: $a % $b
         * Exponenciación: $a ** $b
         */
        echo (5 % 3) . "\n"; // muestra 2
        echo (5 % -3) . "\n"; // muestra 2
        echo (-5 % 3) . "\n"; // muestra -2 
        echo (-5 % -3) . "\n"; // muestra -2

        echo "<br/>";
        $a = 1;

        echo $a + $a++; // podría mostrar 2 o 3
        echo "<br/>";

        $num1 = 24;
        $num2 = 32;

        echo "Suma: " . ($num1 + $num2) . "<br/>";
        echo "Resta: " . ($num1 - $num2) . "<br/>";
        echo "Multiplicación: " . ($num1 * $num2) . "<br/>";
        echo "Divisón: " . ($num1 / $num2) . "<br/>";
        echo "Módulo: " . ($num1 % $num2) . "<br/>";
        echo "Exponenciación: " . ($num1 ** $num2) . "<br/>";

        // Operadores de incremento/decremento
        /**
         * Pre-incremento: ++$a 
         * Post-incremento: $a++
         * Pre-decremento: --$a
         * Post-decremento: $a--
         */
        echo "<h3>Postincremento</h3>";
        $num = 5;
        echo "Debe ser 5: " . $num++ . "<br />\n";
        echo "Debe ser 6: " . $num . "<br />\n";

        echo "<h3>Preincremento</h3>";
        $num = 5;
        echo "Debe ser 6: " . ++$num . "<br />\n";
        echo "Debe ser 6: " . $num . "<br />\n";

        echo "<h3>Postdecremento</h3>";
        $num = 5;
        echo "Debe ser 5: " . $num-- . "<br />\n";
        echo "Debe ser 4: " . $num . "<br />\n";

        echo "<h3>Predecremento</h3>";
        $num = 5;
        echo "Debe ser 4: " . --$num . "<br />\n";
        echo "Debe ser 4: " . $num . "<br />\n";
        ?>

        <?php
        // Operadores aritméticas sobre variables de caracteres
        echo "<h3>Variables de Caracteres</h3>";
        echo '== Letras ==' . PHP_EOL;
        $s = 'W';
        for ($n = 0; $n < 6; $n++) {
            echo ++$s . PHP_EOL;
        }
        echo "<br/>";
        // Los caracteres de dígitos tienen un comportamiento diferente
        echo '== Dígitos ==' . PHP_EOL;
        $d = 'A8';
        for ($n = 0; $n < 6; $n++) {
            echo ++$d . PHP_EOL;
        }
        ?>

        <?php
        echo "<br/>";
        // Los operadores de asignación es "="
        echo "<h3>Operadores de Asignación</h3>";
        $a = 3;
        $b = &$a; // $b es una referencia para $a

        print "$a\n";
        echo "<br/>";
        $edad = 19;
        echo $edad . "<br/>";
        echo ($edad += 5);
        ?>

        <?php
        echo "<br/>";
        // Los operadores de bit a bit permiten la evaluación y manipulación de bits dentro de un integer
        /**
         * And (y): $ab & $b 
         * Or (o inclusivo): $a | $b
         * Xor (o exlusivo): $a ^ $b
         * Not (no): ~ $a
         * Shift left (desplazamiento a izquierda) $a << $b
         * Shift right (desplazamiento a derecha) $a >> $b
         */
        echo "<h3>Operadores de bit a bit</h3>";
        $values = array(0, 1, 2, 4, 8);
        $test = 1 + 4;
        
        echo "\n AND bit a bit \n<br/>";
        foreach ($values as $value) {
            $result = $value & $test;
            printf($result, $value, '&', $test);
        }

        echo "<br/>";
        echo "\n OR inclusivo bit a bit \n<br/>";
        foreach ($values as $value) {
            $result = $value | $test;
            printf($result, $value, '|', $test);
        }
        echo "<br/>";
        echo "\n OR exclusivo (XOR) bit a bit \n<br/>";
        foreach ($values as $value) {
            $result = $value ^ $test;
            printf($result, $value, '^', $test);
        }
        ?>
    </body>
</html>




