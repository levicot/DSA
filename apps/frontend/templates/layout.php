<!DOCTYPE html>
    <?php include(sfConfig::get('sf_app_template_dir').'/head.php') ?>
    <body>     	
        <?php 
        	include(sfConfig::get('sf_app_template_dir').'/header.php'); 
		 	include(sfConfig::get('sf_app_template_dir').'/buscador.php') 
		?>
        <div id="content">
            <div id="contenedor">
                <div id="listado">
                    <?php include_component('podcast', 'listadoPodcast') ?>
                </div>
	            <div class="content">
	               <?php echo $sf_content ?>
		        </div>
        	</div>
        </div>        
        <?php include(sfConfig::get('sf_app_template_dir').'/footer.php') ?>		
    </body>
</html>


