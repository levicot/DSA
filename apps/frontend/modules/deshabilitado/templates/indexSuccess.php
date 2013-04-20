<!DOCTYPE html>
    <?php include(sfConfig::get('sf_app_template_dir').'/head.php') ?>
    <body>    
        <?php include(sfConfig::get('sf_app_template_dir').'/header.php'); ?>
        <div id="content" class="bg">
			<p class="letraContentMin"><?php echo (configuracionTable::getMensajeError()) ?></p>
        </div>
        <?php include(sfConfig::get('sf_app_template_dir').'/footer.php') ?>
    </body>
</html>


