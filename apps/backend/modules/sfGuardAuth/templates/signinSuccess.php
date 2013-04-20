<!DOCTYPE html>
<?php include(sfConfig::get('reuse_frontend').'/head.php'); ?>
    <body>    	 
        <?php include(sfConfig::get('reuse_frontend').'/header.php'); ?>
        <div id="content">
            <?php if ($form->hasErrors()): ?>
                <div class="flash_error">
                    <strong>Error</strong>: El datos del usuario no son correctos, o faltan completar datos campos, o el usuario esta deshabilitado.
                </div>
            <?php endif; ?>
                <div id="contenedor">
                    <div id="listado">
                        <div id="loginA">
                            <form action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
                                <label class="unico" for="signin_username">
                                    Nombre de usuario:
                                </label>

                                <p><?php echo $form['username'] ?></p>
                                <label class="unico" for="signin_password">
                                    Contraseña:
                                </label>
                                <p><?php echo $form['password'] ?></p>
                                <label for="signin_remember">
                                    Recordarme:
                                </label>
                            <?php echo $form['remember']->render() ?></p>
                            <button type="submit">Iniciar Sesión</button>
                            <?php echo $form['_csrf_token'] ?>
                        </form>
                        <div id="volver">
                            <a href="/alumno/entrega3/web">Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include(sfConfig::get('reuse_frontend').'/footer.php'); ?>
    </body>
</html>
