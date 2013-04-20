<!DOCTYPE html>
    <?php include(sfConfig::get('sf_app_template_dir').'/head.php') ?>
    <body>
        <?php 
        	include(sfConfig::get('sf_app_template_dir').'/header.php'); 
		 	include(sfConfig::get('sf_app_template_dir').'/buscador.php') 
		?>
        <div id="content">
                <div id="contenedor">
	                <div id="podcast">
	                	<img class="img" src="/uploads/imagenes/<?php echo $podcast->getImagen(); ?>" alt="<?php echo $podcast->getNombre(); ?>" width=100 height=100 />
	                	<p class="nombre"><?php echo $podcast->getNombre(); ?></p>
	                	<p class="descripcion"><?php echo $podcast->getDescripcion(); ?></p>
	                </div>
                    <div id="listado">
                    	<div class="item">
                    		<p class="item_space_pos item_text">T&iacute;tulo</p>
                    		<p class="item_space_tit item_text">Descripci&oacute;n</p>
                    		<p class="item_space item_text">Audio</p>
                    		<p class="item_space"></p>
                    		<p class="item_space"></p>
                    	</div>
                        		<?php foreach ($pager->getResults() as $episodio):?>
                        			<div class="item pos">
			                    		<p class="item_space item_text_desc"><?php echo $episodio->getTitulo(); ?></p>
                                        <p class="item_space_det item_text_desc"><?php echo $episodio->getDescripcion(); ?></p>
                                            <audio class="item_space" controls="controls">
                                                <source src="/uploads/podcast/<?php echo $episodio->getAudio_ogg(); ?>" type="audio/ogg" />
                                                <source src="/uploads/podcast/<?php echo $episodio->getAudio_mp3(); ?>" type="audio/mp3" />
                                                <p class="desc_tema">Este browser no soporta el tag &lt;audio&gt;.</p>
                                            </audio>
                                        
                                        <?php if(eregi("MSIE", $_SERVER['HTTP_USER_AGENT'])){ ?>
                                        <a class="item_space" href="https://grupo83.proyecto2011.linti.unlp.edu.ar/alumno/entrega3/web/episodios/download?file=<?php echo $episodio->getAudio_mp3(); ?>"><img src="/alumno/entrega3/web/images/download.gif" alt="Download" title="Download"></a>
                                        <?php } else { ?>
                                        <a class="item_space" href="https://grupo83.proyecto2011.linti.unlp.edu.ar/alumno/entrega3/web/episodios/download?file=<?php echo $episodio->getAudio_ogg(); ?>"><img src="/alumno/entrega3/web/images/download.gif" alt="Download" title="Download"></a>
                                        <?php } ?>                                        
                                        <a class="item_space" href="https://grupo83.proyecto2011.linti.unlp.edu.ar/alumno/entrega3/web/rss/show/id/<?php echo $episodio->getIdPodcast(); ?>"><img src="/alumno/entrega3/web/images/feed.png" alt="Feed" title="Feed"></a>
                                  </div>  
                        		<?php endforeach;?>
                    <div id="nav">
						<?php include(sfConfig::get('sf_app_template_dir').'/pager.php'); ?> 
					</div>
                </div>
                <div id="volver">
                    <a href="/alumno/entrega3/web">&larr; Volver</a>
                </div>
            </div>
        </div>
        <?php include(sfConfig::get('sf_app_template_dir').'/footer.php') ?>
    </body>
</html>


