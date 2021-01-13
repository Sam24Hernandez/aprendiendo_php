<aside id="sidebar">

    <div id="buscador" class="block">
        <h3>Buscar</h3>

        <form action="buscar.php" method="POST"> 
            <input type="text" name="busqueda" />
            <input type="submit" value="Buscar" />
        </form>
    </div>

    <?php if (isset($_SESSION['usuario'])): ?>
        <div id="usuario-logueado" class="block">
            <h3>Bienvenido, <?= $_SESSION['usuario']['nombre'] . ' ' . $_SESSION['usuario']['apellido']; ?></h3>
            <!--botones-->
            <div class="all-buttons">
                <a href="crear-entradas.php" class="btn btn-success">Crear entradas</a>
                <a href="crear-categoria.php" class="btn">Crear categoria</a>
                <a href="mis-datos.php" class="btn btn-warning">Mis datos</a>
                <a href="logout.php" class="btn btn-danger">Cerrar sesión</a>
            </div>
        </div>
    <?php endif; ?>

    <?php if (!isset($_SESSION['usuario'])): ?>
        <div id="login" class="block">
            <h3>Identíficate</h3>
            <?php if (isset($_SESSION['error_login'])): ?>
                <div class="alert alert-danger">
                    <?= $_SESSION['error_login']; ?>
                </div>
            <?php endif; ?>

            <form action="login.php" method="POST">
                <label for="email">Email:</label>
                <input type="email" name="email" placeholder="Email" />

                <label for="password">Contraseña:</label>
                <input type="password" name="password" placeholder="Contraseña" />

                <input type="submit" value="Entrar" />
            </form>
        </div>

        <div id="register" class="block">
            <h3>Regístrate</h3>

            <!-- Mostrar errores en la vista -->
            <?php if (isset($_SESSION['completado'])): ?>
                <div class="alert alert-success">
                    <?= $_SESSION['completado'] ?>
                </div>

            <?php elseif (isset($_SESSION['errores']['general'])) : ?>
                <div class="alert alert-danger">
                    <?= $_SESSION['errores']['general'] ?>
                </div>
            <?php endif; ?>

            <form action="register.php" method="POST">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" />
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>

                <label for="apellido">Apellido(s):</label>
                <input type="text" name="apellido" />
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellido') : ''; ?>

                <label for="email">Email:</label>
                <input type="email" name="email" />
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>

                <label for="password">Contraseña:</label>
                <input type="password" name="password" />
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : ''; ?>

                <input type="submit" name="submit" value="Registrarse" />
            </form>
            <?php borrarErrores(); ?>
        </div>   
    <?php endif; ?>
</aside>

