<?php require_once 'includes/connection.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<?php
$entrada_actual = conseguirEntrada($db, $_GET['id']);

if (!isset($entrada_actual['id'])) {
    header("Location: index.php");
}
?>
<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/aside.php'; ?>

<div id="principal">

    <h1><?= $entrada_actual['titulo'] ?></h1>

    <a href="categoria.php?id=<?= $entrada_actual['categoria_id'] ?>">
        <h2><?= $entrada_actual['categoria'] ?></h2>
    </a>
    <h4 class="fecha"><?= $entrada_actual['fecha'] ?> | <?= $entrada_actual['usuario'] ?></h4>
    <p>
        <?= $entrada_actual['descripcion'] ?>
    </p>

    <?php if (isset($_SESSION["usuario"]) && $_SESSION['usuario']['id'] == $entrada_actual['usuario_id']): ?>
        <br/>	
        <a href="editar-entrada.php?id=<?= $entrada_actual['id'] ?>" class="btn btn-success">Editar entrada</a>
        <a href="borrar-entrada.php?id=<?= $entrada_actual['id'] ?>" class="btn btn-danger">Eliminar entrada</a>
    <?php endif; ?>

</div> <!--fin principal-->

<?php require_once 'includes/footer.php'; ?>