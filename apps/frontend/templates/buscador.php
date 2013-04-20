<div id="buscador">
	<form action="<?php echo url_for('busqueda/search'); ?>" method="get">
		<select id="seleccionar" name="cat" required >
			<option value="" SELECTED>- Seleccionar -</option>
		<?php
		$categorias = categoriaTable::getCategorias();
		foreach ($categorias as $categoria): ?>
			<option value="<?php echo $categoria->getId(); ?>"><?php echo $categoria->getNombre(); ?></option>
		<?php endForeach;  ?>
		</select>
		<label for="buscar">Buscar: </label>
			<input type="text" id="buscar" value="buscar un podcast" name="nombre"/>
			<input type="submit" value="Buscar">
	</form>
</div>    