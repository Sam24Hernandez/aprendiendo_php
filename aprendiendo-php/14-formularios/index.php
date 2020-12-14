<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>PHP - Formularios</title>
    </head>
    <body>
        <h1>Formulario & Validación:</h1>
        <ul>
            <?php if(isset($errores)) {
                foreach ($errores as $error) {
                    echo "<li> $error </li>";
                }
            }            
            ?>
        </ul>
        
        <!-- 
            En action se ha puesto "htmlspecialchars($_SERVER["PHP_SELF"]); esto es una superglobal"
        que devuelve el nombre del archivo que se encuentra en el formulario, lo que hace que los datos
        se envíen al mismo archivo, en lugar de llevarlos a otro archivo para tratarlos.
        
        # Si se usa es necesario usar la función htmlspecialchars(), que convierte caracteres especiales
        en entidades HTML previniendo posibles ataques Cross-Site Scripting.
        -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <p>
                Nombre: <input type="text" required="required" autofocus="autofocus" name="nombre">
            </p>
            <p>
                Email: <input type="email" required="required" name="email">
            </p>
            <p>
                Contraseña: <input type="password" required="required" name="password">
            </p>
            <p>
                Educación:
                <select name="educacion">
                    <option value="sin-estudios">Sin estudios</option>
                    <option value="educacion-obligatoria" selected="selected">Educación Obligatoria</option>
                    <option value="formacion-profesional">Formación profesional</option>
                    <option value="universidad">Universidad</option>
                </select>
            </p>
            <p>
                Nacionalidad: 
                <input type="radio" name="nacionalidad" value="hispana">Hispana
                <input type="radio" name="nacionalidad" value="otro">Otro
            </p>
            <p>
                Idiomas: 
                <input type="checkbox" name="idiomas[]" value="español" checked="checked">Español
                <input type="checkbox" name="idiomas[]" value="inglés">Inglés
                <input type="checkbox" name="idiomas[]" value="francés">Francés
                <input type="checkbox" name="idiomas[]" value="alemán">Alemán
            </p>
            <input type="submit" name="submit" value="Enviar">

            <?php
            function filtrado($datos) {
                $datos = trim($datos); // Elimina espacios antes y después de los datos
                $datos = stripslashes($datos); // Elimina backslashes \
                $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
                return $datos;
            }

            if (isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
                // El nombre, email y contraseña son campos obligatorios
                if(empty($_POST["nombre"])) {
                    $errores[] = "El nombre es obligatorio";
                }
                
                if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) || empty($_POST["email"])) {
                    $errores[] = "No se ha indicado email o el formato no es válido.";
                }
                
                if(empty($_POST["nombre"]) || strlen($_POST["password"]) < 5) {
                    $errores[] = "La contraseña es obligatoria y debe ser mayor a 5 carácteres.";
                }
                // si el array $errores está vacío, se aceptan los datos y se asignan a variables
                if(empty($errores)) {
                    $nombre = filtrado($_POST["nombre"]);
                    $email = filtrado($_POST["email"]);
                    $password = filtrado($_POST["password"]);
                    $educacion = filtrado($_POST["educacion"]);
                    $nacionalidad = filtrado($_POST["nacionalidad"]);
                    // Utilizamos implode para pasar el array a string
                    $idiomas = filtrado(implode(", ", $_POST["idiomas"]));
                }
            }
            ?>

            <?php if (isset($_POST["submit"])): ?>
            <h2>Mostrar datos enviados:</h2>
            Nombre : <?php isset($nombre) ? print $nombre : ""; ?> <br>
            Email : <?php isset($email) ? print $email : ""; ?> <br>
            Contraseña : <?php isset($password) ? print $password : ""; ?> <br>
            Educación : <?php isset($educacion) ? print $educacion : ""; ?> <br>
            Nacionalidad : <?php isset($nacionalidad) ? print $nacionalidad : ""; ?> <br>
            Idiomas : <?php isset($idiomas) ? print $idiomas : ""; ?> <br>            
            <?php endif; ?>
        </form>            
    </body>
</html>


