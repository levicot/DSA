<?php if (($sf_user->getGuardUser()->getId() == $podcast->getIdUsuario()) || ($sf_user->hasCredential('admin'))) { ?>
    <td>
        <input type="checkbox" name="ids[]" value="<?php echo $podcast->getPrimaryKey() ?>" class="sf_admin_batch_checkbox" />
    </td>
<?php } else {
 ?>
    <td></td>    
<?php } ?>