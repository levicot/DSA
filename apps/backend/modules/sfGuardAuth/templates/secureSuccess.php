<?php use_helper ( 'I18N' )?>
<!DOCTYPE html>
	<?php include(sfConfig::get('reuse_frontend').'/head.php'); ?>
	<body>
		<?php include(sfConfig::get('reuse_frontend').'/header.php'); ?>
		<div id="content" class="bg">
			<p class="letraContentMin"><?php echo __ ( 'No tiene las credenciales suficientes. ', null, 'sf_guard' )?></p>
		</div>
		<?php include(sfConfig::get('reuse_frontend').'/footer.php'); ?>
	</body>
</html>
