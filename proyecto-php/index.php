<?php require_once 'includes/header.php'; ?>
<!-- Barra Lateral -->
<?php require_once 'includes/aside.php'; ?>

<!-- Main Principal -->
<div id="principal">
    <h1>Últimas Entradas</h1>

    <?php
    $entradas = conseguirEntradas($db, true);
    if (!empty($entradas)) :
        while ($entrada = mysqli_fetch_assoc($entradas)) :
            ?>
            <article class="entrada">
                <a href="entrada.php?id=<?= $entrada['id'] ?>">
                    <h2><?=$entrada['titulo']?></h2>
                    <span class="fecha"><?=$entrada['categoria'].' | '.$entrada['fecha']?></span>
                    <p>
                        <?= substr($entrada['descripcion'], 0, 180)."..."?>
                    </p>
                </a>
            </article>
            <?php
        endwhile;
    endif;
    ?>

    <div id="ver-todas">
        <a href="entradas.php">Ver Más</a>
    </div>
</div> <!-- End Main Principal -->

<!-- Footer -->
<?php require_once 'includes/footer.php'; ?>






















