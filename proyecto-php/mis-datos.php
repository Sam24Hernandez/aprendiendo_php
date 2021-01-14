<?php require_once 'includes/redirection.php'; ?>
<?php require_once 'includes/header.php'; ?>	
<?php require_once 'includes/aside.php'; ?>

<!-- CAJA PRINCIPAL -->
<div id="principal">
    <h1>Mis datos:</h1>

    <?php if (isset($_SESSION['completado'])): ?>
        <div class="alert alert-success">
            <?= $_SESSION['completado'] ?>
        </div>
    <?php elseif (isset($_SESSION['errores']['general'])): ?>
        <div class="alert alert-danger">
            <?= $_SESSION['errores']['general'] ?>
        </div>
    <?php endif; ?>

    <form action="actualizar-usuario.php" method="POST"> 
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="<?= $_SESSION['usuario']['nombre']; ?>"/>
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>

        <label for="apellidos">Apellido(s)</label>
        <input type="text" name="apellido" value="<?= $_SESSION['usuario']['apellido']; ?>"/>
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellido') : ''; ?>

        <label for="email">Email</label>
        <input type="email" name="email" value="<?= $_SESSION['usuario']['email']; ?>"/>
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>

        <input type="submit" name="submit" value="Actualizar Datos" />
    </form>
    <?php borrarErrores(); ?>

</div> <!--fin principal-->

<?php require_once 'includes/footer.php'; ?>

