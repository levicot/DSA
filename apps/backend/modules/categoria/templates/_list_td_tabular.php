<?php if ($categoria->getId() != 0){ ?>
	<td class="sf_admin_text sf_admin_list_td_nombre">
	<?php echo $categoria->getNombre() ?>
	</td>
	<td class="sf_admin_date sf_admin_list_td_created_at">
	<?php echo false !== strtotime($categoria->getCreatedAt()) ? format_date($categoria->getCreatedAt(), "f") : '&nbsp;' ?>
	</td>
<?php } ?>