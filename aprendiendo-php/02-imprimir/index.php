<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>PHP - Imprimir por pantalla</title>        
    </head>
    <body>
        <h1>Aprendiendo PHP Básico - <?php echo "Sam Hernández"; ?></h1>    
        
        <?="Bienvenido a PHP"?>
               
        <?php
            // Titulo de la sección de artículos
            echo "<h3>Listado de artículos:</h3>";
             /*
                Integración de PHP
             */
            echo "<ul>"
                    ."<li>Refresco Coca-Cola 3l</li>"
                    ."<li>Pan Bimbo</li>"
                    ."<li>Jamón de Pavo 200g</li>"
                    ."<li>Jugo de Manzana 600ml</li>"
                ."</ul>";
            echo '<p>Esta es toda la'.' - '.'lista de artículos.</p>'
        ?>
    </body>
</html>

