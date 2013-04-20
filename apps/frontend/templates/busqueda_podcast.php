<ul>
	<?php foreach ($podcasts as $podcast): ?>
		<li>
			<a href="<?php echo url_for('episodios/show?id='.$podcast->getId()) ?>"><img class="shadow" src="/uploads/imagenes/<?php echo $podcast->getImagen(); ?>" width=100 height=100 alt="<?php echo $podcast->getNombre(); ?>"/></a>
			<p><a href="<?php echo url_for('episodios/show?id='.$podcast->getId()) ?>"><?php echo $podcast->getNombre(); ?></a></p>
		</li>
	<?php endforeach; ?>
</ul>