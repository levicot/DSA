<?php

class sfValidatedFileCustom extends sfValidatedFile {

    public function save($file = null, $fileMode = 0666, $create = true, $dirMode = 0777) {

        $saved = parent::save($file, $fileMode, $create, $dirMode);


        return $saved;
    }

}

?>
