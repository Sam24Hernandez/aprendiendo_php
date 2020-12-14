<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Formulario subida de archivos</title>
    </head>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size; ?>" /><br>
            <input type="file" name="imagen" /><br>
            <input type="submit" name="submit" value="Enviar" />
        </form>
        
        <?php
        $directorioSubida = "uploads/";
        $max_file_size = "51200";
        $extValidas = array("jpg", "png", "jpeg", "gif");
        if(isset($_POST["submit"]) && isset($_FILES["imagen"])) {
            $errores = array();
            $nombreArchivo = $_FILES["imagen"]["name"];
            $filesize = $_FILES["image"]["size"];
            $directorioTemp = $_FILES["image"]["tmp_name"];
            $tipoArchivo = $_FILES["image"]["type"];
            $arrayArchivo = pathinfo($nombreArchivo);
            $extension = $arrayArchivo["extension"];
            // Comprobamos la extensión del archivo
            if(!in_array($extension, $extValidas)) {
                $errores[] = "La extensión del archivo no es válida o no se ha subido nada.";
            }
            // Comprobamo el tamaño del archivo
            if($filesize > $max_file_size) {
                $errores[] = "La imagen debe tener un tamaño inferior a 50 kb";
            }
            // Comprobamos y renombramos el nombre del archivo
            $nombreArchivo = $arrayArchivo["filename"];
            $nombreArchivo = preg_replace("/[^A-Z0-9._-]/i", "_", $nombreArchivo);
            $nombreArchivo = $nombreArchivo . rand(1, 100);
            // Desplazamos el archivo si no hay errores
            if(empty($errores)) {
                $nombreCompleto = $directorioSubida.$nombreArchivo.".".$extension;
                move_uploaded_file($directorioTemp, $nombreCompleto);
                print "El archivo se ha subido correctamente";
            }
        }
        ?>
    </body>
</html>