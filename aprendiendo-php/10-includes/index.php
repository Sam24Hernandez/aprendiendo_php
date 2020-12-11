<!--
 * Include vs Require *        
 
 1. La sentencia include incluye y evalúa el archivo especificado. 
 2. La sentencia require es más estricto que el include
-->
<?php include_once 'includes/header.php'; ?>
<?php include 'includes/vars.php'; ?>

<!-- Contenido -->
<div>
    <h2>Esta es la página de Inicio</h2>
    <p>Texto de prueba de la página de inicio.</p>
    
    <?php echo "<p>Una $fruta $color</p>" ?>
</div>

<?php include_once 'includes/footer.php'; ?>




