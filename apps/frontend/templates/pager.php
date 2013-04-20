<?php if ($pager->haveToPaginate()): ?>
<?php $links = $pager->getLinks(); foreach ($links as $page): ?>
<div class="nav_elem">
<!--<?php echo ($page == $pager->getPage()) ? $page : link_to($page, '/alumno/entrega3/web/episodios/show/id/1/page/'.$page) ?>-->
	<?php if ($page == $pager->getPage()): echo $page; ?>
	<?php else: ?> 
		<a href='/alumno/entrega3/web/episodios/show/id/<?php echo $episodio->getIdPodcast(); ?>/page/<?php echo $page ?>'><?php echo $page ?></a>
	<?php endif ?>
</div>
<?php endforeach ?>
<?php endif ?>