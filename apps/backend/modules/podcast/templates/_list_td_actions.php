<?php if (($sf_user->getGuardUser()->getId() == $podcast->getIdUsuario()) || ($sf_user->hasCredential('admin')) || (podcast_usuarioTable::getSeguidores($sf_user->getGuardUser()->getId(), $podcast->getId()))) { ?>
    <td>
        <ul class="sf_admin_td_actions">
            <?php echo $helper->linkToEdit($podcast, array('params' => array(), 'class_suffix' => 'edit', 'label' => 'Edit',));
            if (!podcast_usuarioTable::getSeguidores($sf_user->getGuardUser()->getId(), $podcast->getId()))
                echo $helper->linkToDelete($podcast, array('params' => array(), 'confirm' => 'Are you sure?', 'class_suffix' => 'delete', 'label' => 'Delete',))
            ?>
        </ul>
    </td>
<?php } else {
?>
            <td>
                <ul class="sf_admin_td_actions">
                </ul>
            </td>
<?php } ?>