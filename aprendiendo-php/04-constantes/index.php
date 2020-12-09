<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>PHP - Constantes</title>
    </head>
    <body>
        <?php
        /**
         * Las constantes es un contenedor de información que no puede
         * cambiar su estado o variar el valor.
         */
        define('nombre', 'Sam Hernández');
        define("profesión", "Desarrollador Web e Ingeniero");
        define("MAXSIZE", 100);
        
        echo '<h1>'.nombre.' - '.profesión.'</h1>';
        echo 'Capacidad de la memoria: '.MAXSIZE.' MB'.'<br/>';
        echo constant("MAXSIZE"); // lo mismo que la línea anterior
        
        interface bar {
            const test = 'foobar!';
        }
        
        class foo {
            const test = 'foobar!';
        }
        
        $const = 'test';
        
        var_dump(constant('bar::'. $const));
        var_dump(constant('foo::'. $const));
        
        define('ANIMALES', array(
           'perro',
            'gato',
            'pájaro'
        ));
        echo ANIMALES[1]; // muestra "gato"
        ?>
    </body>
</html>




