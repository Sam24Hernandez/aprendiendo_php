<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>PHP - Variables & Tipos de Datos</title>
    </head>
    <body>
        <h1>Variables & Tipos de Datos</h1>
        <?php
        // Una variable es un contenedor de información, puedo guardar cualquier valor dentro de ella.
        $first_variable = "Mi primera variable en PHP";
        $num = 19;

        echo '<h3>' . $first_variable . '</h3>';
        echo '<p>' . 'Tengo ' . $num . ' años.' . '</p>';
        ?>
        <hr/>
        <h3>Tipos de Datos en PHP</h3>
        <?php
        /**
          TIPOS DE DATOS EN PHP:
         * 1. Entero (int / integer) 
         * 2. Flotante / Decimales (float / double)
         * 3. Cadenas (string)
         * 4. Booleano (bool)
         * 5. NULO (NULL)
         * 6. Arreglos (array / Colección de Datos)
         * 7. Objetos
         */
        // 1. Números enteros (Integers) Z={...,-2,-1,0,1-2...}
        $a = 1234; // número decimal
        var_dump($a);

        var_dump((int) (25 / 7)); // int (3)
       
        // 2. Números de punto flotante (floats) 7.4.0
        var_dump(25 / 7); // float(3.5714285714286) 
        var_dump(round(25 / 7));  // float(4)

        /**
         * 3. Strings es una serie de caracteres donde cada carácter es lo mismo que
         * un byte. O sea se admite un conjunto de 256 caracteres.
         */
        // String Entrecomillado simple ('')
        echo 'Esto es una cadena sencilla<br/>';
        
        echo 'También se pueden incluir nuevas líneas en
        un string de esta forma, ya que es
        correcto hacerlo así<br/>';
        // String Entrecomillado doble ("")
        $jugo = "manzana";
        
        echo "El tomó algo de jugo de $jugo.".PHP_EOL;
        // Inválido. "s" es un carácter válido para un nombre de variable, pero la variable es $jugo.
        // echo "Él tomó algo de jugo hecho de $jugos.";
        // Válido. Explícitamente especifica el final del nombre de la variable encerrándolo entre llaves:
        echo "Él tomó algo de jugo hecho de ${jugo}s."                
        ?>
        <br>
        <?php
        /**
        * 4. Un boolean expresa un valor que indica verdad. (TRUE o FALSE)
        */
        $foo = True; // asigna el valor TRUE a $foo
        var_dump((bool) ""); // bool(false)
        var_dump((bool) 1);  // bool(true)
        var_dump((bool) -2); // bool(true)
        var_dump((bool) "foo"); // bool(true)
        var_dump((bool) 2.3e5); // bool(true)
        var_dump((bool) array(12)); // bool(true)
        var_dump((bool) array()); // bool(false)
        var_dump((bool) "false"); // bool(true)
        
        /**
         * 5. El valor NULL representa una variable sin valor.
         * NULL es el único valor posible del tipo null.
         */
        $var = NULL;
        var_dump($var);
        
        /**
         * 6. Array en PHP es en realidad un mapa ordenado.
         * Se optimiza para varios usos diferentes:
         * - array de lista, tabla hash, colección, pila, cola...
         * array(
         * clave => valor,
         * clave2 => valor2,
         * ...
         * )
         */
        $array = array(
            "foo" => "bar",
            "bar" => "foo",
        );
        
        // a partir de PHP 5.4
        $array2 = [
           "foo" => "bar",
            "bar" => "foo",
        ];
        var_dump($array, $array2);
        
        $array_example = [
           1 => "a",
           "1" => "b",
           1.5 => "c",
           true => "d",
        ];
        /**
         * El resultado del ejemplo sería
         * array(1) {
         *  [1] =>
         *  string(1) "d"
         * }
         */
        
        var_dump($array_example);
        
        $array3 = ["foo", "bar", "hello", "world"];
        var_dump($array3);
        ?>
        <h4>Objeto en PHP</h4>
        <?php
        // 7. Para crear un nuevo objeto, se utiliza la sentencia new para instanciar una clase
        class foo
        {
            function hacer_algo()
            {
                echo "Haciendo algo.";
            }
        }
        
        $bar = new foo;
        $bar->hacer_algo();
        
        $obj = (object) array('1' => 'foo');
        var_dump(isset($obj->{'1'})); // muestra 'bool(true)'
        var_dump(key($obj)); // muestra string(1)
        ?>

    </body>
</html>
