<?php require_once 'includes/redirection.php'; ?>
<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/aside.php'; ?>

<div id="principal">
    <h1>Crear Entradas</h1>
    <p>
        Añade contenido para la comunidad de Blog Geek.com, crea nuevas entradas al blog
        para que los usuarios puedan disfrutar leyendolas y compartiendolas con la comunidad.
    </p>
    <br />
    <form action="guardar-entrada.php" method="POST">
        <label for="titulo">Titulo de la entrada:</label>
        <input type="text" name="titulo" />
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'titulo') : ''; ?>

        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion"></textarea>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'descripcion') : ''; ?>

        <label for="categoria">Categoría</label>
        <select name="categoria">
            <?php
            $categorias = conseguirCategorias($db);
            if (!empty($categorias)):
                while ($categoria = mysqli_fetch_assoc($categorias)):
                    ?>
                    <option value="<?= $categoria['id'] ?>">
                        <?= $categoria['nombre'] ?>
                    </option>
                    <?php
                endwhile;
            endif;
            ?>
        </select>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'categoria') : ''; ?>

        <input type="submit" value="Guardar entrada" />
    </form>
    <?php borrarErrores(); ?>
</div>

<?php require_once 'includes/footer.php'; ?>

