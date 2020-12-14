<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>PHP - Directorios</title>
    </head>
    <body>
        <?php
        if(!is_dir('mi_carpeta')) {
            mkdir('mi_carpeta', 0777) or die('No se puede crear la carpeta');
        } else {
            echo "Ya existe la carpeta";
        }
        
        echo "<hr> <h1>Contenido carpeta</h1>";
        if($gestor = opendir('./mi_carpeta')) {
            while (false !== ($archivo = readdir($gestor))) {
                if($archivo != '.' && $archivo != '..') {
                    echo $archivo."<br/>";
                }
            }
        }
        ?>
    </body>
</html>
