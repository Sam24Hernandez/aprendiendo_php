<?php require_once 'connection.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Blog Geek.com</title>
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
    </head>
    <body>
        <!-- Sección del Encabezado Principal -->
        <header id="header">
            <!-- Logo -->
            <div id="logo">                
                <a href="index.php">
                    Blog Geek.com
                </a>
            </div>

            <!-- Sección del Menú -->
            <nav id="menu">
                <ul>
                    <li>
                        <a href="index.php">Inicio</a>
                    </li>
                    <?php
                    $categorias = conseguirCategorias($db);
                    if (!empty($categorias)) :
                        while ($categoria = mysqli_fetch_assoc($categorias)) :
                            ?>
                            <li>
                                <a href="categoria.php?id=<?= $categoria['id'] ?>">
                                    <?= $categoria['nombre'] ?>
                                </a>
                            </li>
                            <?php
                        endwhile;
                    endif;
                    ?>                    
                    <li>
                        <a href="index.php">Acerca de</a>
                    </li>
                    <li>
                        <a href="index.php">Contacto</a>
                    </li>
                </ul>
            </nav>
            <div class="clearfix"></div>
        </header>
        <div id="container">

