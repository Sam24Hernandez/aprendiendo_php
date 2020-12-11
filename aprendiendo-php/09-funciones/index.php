<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>PHP - Funciones</title>
    </head>
    <body>
        <?php
        /**
         * Funciones:
         * Funciones definidas por el usuario
         */
        // 1. Pseudocódigo para demostrar el uso de funciones
        // function foo($arg_1, $arg_2, /* ... ,*/, $arg_3) {
        //    echo "Función de ejemplo.\n";
        //   return $valor_devuelto;
        // }
        // 2. Funciones condicionales
        echo "<h2>Funciones condicionales</h2>";
        $hacer_algo = true;
        
        /* No podemos llamar a foo() desde aquí
           ya que no existe aún,
           pero podemos llamar a bar() */
        
        bar();
        
        if ($hacer_algo) {
            function foo() {
                echo "No existo hasta que la ejecución del programa llegue hasta mi.\n";
            }
        }
        
        if ($hacer_algo) {
            foo();
        }
        
        function bar() {
            echo "Existo hasta el momento inmediato que comenzó el programa.\n"."<br/>";
        }
        echo "<br/>";
        // 3. Funciones dentro de funciones
        echo "<h2>Funciones dentro de funciones</h2>";
        function example1() {
            function example2() {
               echo "No existo hasta que se llame a example1().\n"; 
            }
        }
        /* No podemos llamar aún a example2()
           ya que no existe. */
         example1();
         /* Ahora podemos llamar a example2(),
            el procesamiento de example1()
            la ha hecho accesible. */
          example2();
          
          echo "<br/>";
        // 4. Funciones recursivas
        echo "<h2>Funciones recursivas</h2>";
        $a = 10;
        function recursividad($a) {
            if ($a < 20) {
                echo "$a\n";                
            }
        }
        echo recursividad($a + 1);
        ?>
        
        <?php
        /**
         * Funciones:
         * Argumentos de funciones - cualquier información puede ser pasada a las funciones
         * mediante la lista de argumentos, la cual es una lista de expresiones
         * delimitada por comas.
         */
        echo "<h2>Argumentos en las funciones</h2>";
        // #1 Pasar arrays a funciones
        function tomar_array($entrada) {
            echo "$entrada[0] + $entrada[1] = '.$entrada[0]+$entrada[1]'";
        }        
        // #2 Uso de parámetros predeterminados en funciones
        function hacer_cafe($tipo = "capuchino") {
            return "Hacer una taza de $tipo.\n"."<br/>";
        }
        echo hacer_cafe();
        echo hacer_cafe(null);
        echo hacer_cafe("expresso");
        echo hacer_cafe("americano");
        
        echo "<br/>";
        // #3 Uso de tipos no escalares como valores predeterminados
        function hacer_yogur($sabor, $tipo = "acidófilo") {
            return "Hacer un tazón de yogur $tipo de $sabor.\n"."<br/>";
        }
        echo hacer_yogur("frambuesa"); // funcionará como se esperaba
        ?>
        <h2>Ejemplos:</h2>
        <?php
        // Ejemplos
        function muestraNombres() {
            echo "Sam Hernándenz"."<br/>";
            echo "Ivana Alarcón"."<br/>";
            echo "Sam Beck"."<br/>";
            echo "Sam Fromm"."<br/>";
        }
        // Invocar función
        muestraNombres();
        
        function tabla($numero) {
            echo "<h3>Tabla de multiplicar del número: $numero</h3>";
            
            for($i = 1; $i <= 10; $i++) {
                $operacion = $numero*$i;
                echo "$numero x $i = $operacion <br>";
            }
        }
        tabla(77);
        ?>
        <?php
        /**
         * Funciones:
         * Devolver valores - los valores devueltos usando la sentencia opcional return.
         * Se puede devolver cualquier tipo, incluidos arrays y objetos.
         * # Si se omite return, el valor devuelto será NULL.
         */
        echo "<h2>Devolver valores (Return)</h2>";
        // #1 Uso del return
        function cuadrado($num) {
            return $num * $num;
        }
        echo cuadrado(4); // imprime '16'
        
        // #2 Devolver un array para obtener múltiples valores
        function numeros_pequeños() {
            return array (0, 1, 2);
        }
        list ($cero, $uno, $dos) = numeros_pequeños(); // imprime '16'
        
        // #3 Declaración básica de tipo de devolución
        echo "<h3>Declaración básica de tipo de devolución</h3>";
        function sum($a, $b): float {
            return $a + $b;
        }
        
        var_dump(sum(1, 2)); 
        ?>
        
        <?php
        /**
         * Funciones:
         * Funciones variables - Significa que si un nombre de variable tiene parentesis anexos a el
         * PHP buscará una función con el mismo nombre que lo evalue.
         */
        echo "<h2>Funciones variables</h2>";
        function ejem() {
            echo "En ejem()<br />\n";
        }
        
        function ejem1($arg = '') {
            echo "En ejem1(); el argumento era '$arg'.<br />\n";
        }
        
        $func = 'ejem';
        $func(); // Esto llama a ejem()
        
        $func = 'ejem1';
        $func('prueba'); // Esto llama a ejem1()
        
        echo "<h3>Ejemplo de método variable</h3>";
        class Foo {
            function Variable() {
                $name = 'Bar';
                $this->$name(); // Esto llama al método Bar()
            }
            
            function Bar() {
                echo "Esto es Bar";
            }
        }
        
        $foo = new Foo();
        $nombrefunc = "Variable";
        $foo->$nombrefunc();
        ?>
        
    </body>
</html>

