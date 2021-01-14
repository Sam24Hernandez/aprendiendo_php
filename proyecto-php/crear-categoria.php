<?php require_once 'includes/redirection.php'; ?>
<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/aside.php'; ?>

<div id="principal">
    <h1>Crear una categoría:</h1>
    <p>
        Añade nuevas categorías para mejorar el Blog Geek.com, y los
        usuarios puedan usarlas al crear contenido.
    </p>
    <br />
    <form action="guardar-categoria.php" method="POST">
        <label for="nombre">Nombre de la Categoría:</label>
        <input type="text" name="nombre" />
        
        <input type="submit" value="Guardar Categoría" />
    </form>
</div>


<?php require_once 'includes/footer.php'; ?>


