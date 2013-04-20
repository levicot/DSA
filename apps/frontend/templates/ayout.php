<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title> <?php echo configuracionTable::getSiteName() ?></title>
        <link rel="stylesheet" type="text/css" media="screen" href="/alumno/entrega3/web/css/<?php echo configuracionTable::getEstilo() ?>.css" />
    </head>
    <body>
        <div id="bg_top"><div id="login"><?php if ($sf_user->isAuthenticated()) echo link_to('Volver', '/alumno/entrega3/web/backend.php'); else echo link_to('Ingresar', '/alumno/entrega3/web/backend.php'); ?><img src="/alumno/entrega3/web/images/key.png" width="12" alt="key"/></div></div>
        <div id="bg_head">
            <p id="letraHeadMax">podcats</p>
            <p id="letraHeadMin">proyecto de Software 2011</p>
            <div id="imageCat"><img src="/alumno/entrega3/web/images/cat.png" alt="cat"/></div>
        </div>
        <div id="buscador">
				<form action="<?php echo url_for('busqueda/search'); ?>" method="get">

					<select name="cat">

					<select id="seleccionar" name="cat" required=true>
						<option value="" SELECTED>- Seleccionar -</option>

					<?php
					$categorias = categoriaTable::getCategorias();
					foreach ($categorias as $categoria): ?>
						<option value="<?php echo $categoria->getId(); ?>"><?php echo $categoria->getNombre(); ?></option>
					<?php endForeach;  ?>
					</select>

					<label>Buscar: </label>
					<input type="text" value="<?php echo $sf_request->getParameter('nombre') ?>" name="nombre" />
					<label for="buscar">Buscar: </label>
					<input type="text" id="buscar" value="buscar un podcast" name="nombre"/>
					<input type="submit" value="Buscar">
				</form>
			</div>    
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
        <div id="bg_foot">
            <p id="rss">2011 | Novedades <a href="rss"> <img src="/alumno/entrega3/web/images/rss.gif" alt="RSS"/></a>  </p>
            <p class="valid">
			    <a href="http://validator.w3.org/check?uri=https%3A%2F%2Fgrupo83.proyecto2011.linti.unlp.edu.ar%2Falumno%2Fentrega3%2Fweb%2F"><img src="http://vacaas.nl/images/w3c-valid-html5.png" alt="Valid HTML 5" height="31" width="88" /></a>
			</p>
			<p class="valid">
				<a href="http://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fgrupo83.proyecto2011.linti.unlp.edu.ar%2Falumno%2Fentrega3%2Fweb%2F&amp;profile=css3&amp;usermedium=all&amp;warning=1&amp;vextwarning=&amp;lang=en">
				    <img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" />
				</a>
			</p>
        </div>
        <?php include(sfConfig::get('sf_app_template_dir').'/reutilizacion.php') ?>
		<h1></h1>
    </body>
</html>


