<?php if ($categoria->getId() != 0){ ?>
	<td>
		<input type="checkbox" name="ids[]" value="<?php echo $categoria->getPrimaryKey() ?>" class="sf_admin_batch_checkbox" />
	</td>   
<?php } ?>