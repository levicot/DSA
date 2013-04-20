<?php if (($sf_user->getGuardUser()->getId() == podcastTable::getIdUsuarioPodcast($episodio->getIdPodcast())) || ($sf_user->hasCredential('admin'))) { ?>
    <td>
        <input type="checkbox" name="ids[]" value="<?php echo $episodio->getPrimaryKey() ?>" class="sf_admin_batch_checkbox" />
    </td>
<?php } else {
?>
    <td></td>
<?php } ?>