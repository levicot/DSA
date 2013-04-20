<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php $sf_user->setCulture('es'); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title><?php echo configuracionTable::getSiteName() ?></title>
        <?php include_http_metas() ?>
        <?php include_metas() ?>        
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>
        <link rel="shortcut icon" href="/favicon.ico" />
        <link rel="stylesheet" href="/alumno/entrega3/web/css/admin.css" type="text/css"/>
    </head>
    <body>
        <ul>
            
            <?php if ($sf_user->isAuthenticated()): ?>            
                <div id="menu" >
                    <ul>
                        <?php if($sf_user->hasCredential('admin')):?>
                        <li><?php echo link_to('Sistema', '/alumno/entrega3/web/backend.php/configuracion/1/edit') ?></li>
                        <li><?php echo link_to('Categoria', '@categoria') ?></li>
                        <li><?php echo link_to('Usuarios', '@sf_guard_user') ?></li>
                        <?php endif; ?>
                        <li><?php echo link_to('Podcast', '@podcast') ?></li>
                        <li><?php echo link_to('Episodio', '@episodio') ?></li>
                        <li><?php echo link_to('Vista visitante', '/alumno/entrega3/web') ?></li>
                        <li><?php echo link_to('Cerrar Sesion', '@sf_guard_signout') ?></li>
                    </ul>
                </div>

            <?php endif ?>

            </ul>
            <div id="contenido">
            <?php echo $sf_content ?>
        </div>
    </body>
</html>