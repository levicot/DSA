<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($configuracion->getId(), 'configuracion_edit', $configuracion) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_titulo">
  <?php echo $configuracion->getTitulo() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_cantItemsFrontEnd">
  <?php echo $configuracion->getCantItemsFrontEnd() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_cantItemsBackEnd">
  <?php echo $configuracion->getCantItemsBackEnd() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_estilo">
  <?php echo configuracionTable::getEstiloNombre() ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_habilitado">
  <?php echo get_partial('configuracion/list_field_boolean', array('value' => $configuracion->getHabilitado())) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_mensajeerror">
  <?php echo $configuracion->getMensajeerror() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($configuracion->getCreatedAt()) ? format_date($configuracion->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($configuracion->getUpdatedAt()) ? format_date($configuracion->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
