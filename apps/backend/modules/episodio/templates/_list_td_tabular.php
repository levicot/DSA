<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($episodio->getId(), 'episodio_edit', $episodio) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_titulo">
  <?php echo $episodio->getTitulo() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_descripcion">
  <?php echo $episodio->getDescripcion() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_audio">
  <?php echo $episodio->getAudio_ogg() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_audio">
  <?php echo $episodio->getAudio_mp3() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_idPodcast">
  <?php $pod=podcastTable::getNombrePodcast(($episodio->getIdPodcast()));
        foreach ($pod as $podcast) echo $podcast->getNombre(); ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($episodio->getCreatedAt()) ? format_date($episodio->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($episodio->getUpdatedAt()) ? format_date($episodio->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
