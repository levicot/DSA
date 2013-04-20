<td class="sf_admin_text sf_admin_list_td_nombre">
    <?php echo $podcast->getNombre(); ?>
</td>
<td class="sf_admin_text sf_admin_list_td_descripcion">
    <?php echo $podcast->getDescripcion() ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_habilitado">
    <?php echo get_partial('podcast/list_field_boolean', array('value' => $podcast->getHabilitado())) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_idPodcast">
    <?php
    $cat = categoriaTable::getNombreCategoria(($podcast->getIdCategoria()));
    foreach ($cat as $categoria)
        echo $categoria->getNombre();
    ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
<?php echo false !== strtotime($podcast->getCreatedAt()) ? format_date($podcast->getCreatedAt(), "f") : '&nbsp;' ?>
</td>


