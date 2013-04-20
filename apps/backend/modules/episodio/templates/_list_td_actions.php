<?php if (($sf_user->getGuardUser()->getId() == podcastTable::getIdUsuarioPodcast($episodio->getIdPodcast())) || ($sf_user->hasCredential('admin')) || (podcast_usuarioTable::getSeguidores($sf_user->getGuardUser()->getId(), $episodio->getIdPodcast()))) {
 ?>
            <td>
                <ul class="sf_admin_td_actions">
        <?php
            echo $helper->linkToEdit($episodio, array('params' => array(), 'class_suffix' => 'edit', 'label' => 'Edit',));
            if (!podcast_usuarioTable::getSeguidores($sf_user->getGuardUser()->getId(), $episodio->getIdPodcast()))
                echo $helper->linkToDelete($episodio, array('params' => array(), 'confirm' => 'Are you sure?', 'class_suffix' => 'delete', 'label' => 'Delete',));
        ?>
        </ul>
    </td>
<?php } else { ?>
            <td>
                <ul class="sf_admin_td_actions">
                </ul>
            </td>
<?php } ?>