<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>PHP - Cookies</title>
    </head>
    <body>               
        <?php
        echo "<h2>Ejemplo #1 envío con setcookie()</h2>";
        // setcookie - Enviar una cookie
        /**
         * setcookie() define una cookie para ser enviada junto con el resto de
         * cabeceras HTTP.
         * Una vez que las cookies se han establecido, se puede acceder a ellas en la 
         * con el array $_COOKIE. 
         * valores Cookie también pueden existir en $_REQUEST. 
         */
        $value = 'something from somewhere';
        
        setcookie("TestCookie", $value);
        setcookie("TestCookie", $value, time()+3600); /* expira en 1 hora */
        setcookie("TestCookie", $value, time()+3600, "/~rasmus/", "example.com", 1);        
        
        // Imprime una cookie individual
        echo $_COOKIE["TestCookie"]."<br/>";
        
        // Otra forma de depurar/pruebas es ver todas las cookies
        print_r($_COOKIE);
        ?>
        
        <?php
        echo "<h2>Ejemplo #2 eliminación con setcookie()</h2>";
        // establecer la fecha de expiración a una hora atrás
        setcookie("TestCookie", "", time() - 3600);
        setcookie("TestCookie", "", time() - 3600, "/~rasmus/", "example.com", 1);
        ?>                
        
    </body>
</html>




