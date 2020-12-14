<!DOCTYPE html>
<html>
    <head>        
        <title>PHP - Cookies</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        echo "<h2>Ejemplo #3 setcookie() y los arrays</h2>";
        // establecer las cookies
        setcookie("cookie[three]", "cookiethree");
        setcookie("cookie[two]", "cookietwo");
        setcookie("cookie[one]", "cookieone");

        // después de que la página se recargue, imprime
        if (isset($_COOKIE['cookie'])) {
            foreach ($_COOKIE['cookie'] as $name => $value) {
                $name = htmlspecialchars($name);
                $value = htmlspecialchars($value);
                echo "$name : $name <br />\n";
            }
        }
        ?>
    </body>
</html>
