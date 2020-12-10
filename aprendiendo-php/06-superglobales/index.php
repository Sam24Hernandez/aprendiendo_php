<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>PHP - Variables SuperGlobales</title>
    </head>
    <body>
        <?php
        /**
         * Superglobals:
         * Son variables internas que están disponibles siempre en todos los ámbitos-
         * Variables superglobals son:
         * $GLOBALS
         * $_SERVER
         * $_GET
         * $_POST
         * $_FILES
         * $_COOKIE
         * $_SESSION
         * $_REQUEST
         * $_ENV
         */
        
         // $GLOBALS - Hace referencia a todas las variables disponibles en el ámbito global         
        function test() {
            $foo = "variable local";
            
            /**
             * Una variable 'global' está disponible en cualquier parte del script.
             * No hace falta hacer global $variable; para acceder a la misma desde funciones
             * o métodos.
             */
            echo '<h3>Variable $GLOBALS</h3>';
            echo '$foo en el ámbito global: ' . $GLOBALS["foo"] . "\n";
            echo '<br/>';
            echo '$foo en el ámbito simple: ' . $foo . "\n";
        }
        
        $foo = "Contenido de ejemplo";
        test();            
        ?>
        
        <?php
        // _$SERVER - Información del entorno del servidor y de ejecución
        echo '<h3>Variable $_SERVER</h3>';
        echo $_SERVER['SERVER_NAME'];
        
        // $_GET - Variables HTTP GET
        echo '<h3>Variable $_GET</h3>';
        /**
         * Asumiendo que el usuario introdujo:
         * http://localhost/PHP/aprendiendo-php/06-superglobales/?nombre=Sam
         */
        echo '¡Hola ' . htmlspecialchars($_GET["nombre"]) . '!';
        
        // $_POST - Variables POST de HTTP
        echo '<h3>Variable $_POST</h3>';
        /**
         * Asumiendo que el usuario introdujo:
         * http://localhost/PHP/aprendiendo-php/06-superglobales/nombre=Sam
         */
        $_POST['nombre'] = 'Sam';
        echo '¡Hola ' . htmlspecialchars($_POST["nombre"]) . '!';
        
        // $_FILES - Variables HTTP Request
        echo '<h3>Variable $_REQUEST</h3>';
        $_GET['foo'] = 'a';
        $_POST['bar'] = 'b';
        var_dump($_GET); // Element 'foo' is string(1) "a"
        var_dump($_POST); // Element 'bar' is string(1) "b"     
        var_dump($_REQUEST); // Does not contain elements 'foo' or 'bar'
        
        // $_SESSION - Variables de sesión
        echo '<h3>Variable $_SESSION</h3>';
        // Creating New Session
        session_start();
        /*
         * session is started if you don't write this line can't use
         * $_SESSION global variable.
         */
        $_SESSION['test'] = 42;
        $test = 43;
        echo $_SESSION['test'];
        
        // $_ENV - Variables de entorno
        echo '<h3>Variable $_ENV</h3>';
        $_ENV['USER'] = 'Sam24Dev';
        echo '¡Mi nombre de usuario es ' . $_ENV["USER"] . '!';
        
        // $_COOKIE - Cookies HTTP
        echo '<h3>Variable $_COOKIE</h3>';
        $_COOKIE['nombre'] = 'Sam Hernández';
        echo '¡Hola ' . htmlspecialchars($_COOKIE["nombre"]) . '!';
        ?>
    </body>
</html>

