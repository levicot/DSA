<!DOCTYPE html>
    <?php include(sfConfig::get('sf_app_template_dir').'/head.php') ?>
    <body>
        <?php 
        	include(sfConfig::get('sf_app_template_dir').'/header.php'); 
		 	include(sfConfig::get('sf_app_template_dir').'/buscador.php'); 
		?>
        <div id="content">
            <div id="contenedor">
            	
                <div id="listado">
                    <?php if (count($podcasts) == 0 ){ ?><p class="letraContentMin">La categoria no posee podcast</p>
                    <?php }else{ include(sfConfig::get('sf_app_template_dir').'/busqueda_podcast.php'); } ?>
                </div>
                <div id="volver">
                        <a href="/alumno/entrega3/web">Volver</a>
                    </div>
            </div>
        </div>
        <div id="bg_foot">           
        </div>

    </body>
</html>