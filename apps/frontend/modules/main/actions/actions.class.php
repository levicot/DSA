<?php

class mainActions extends sfActions {

    public function preExecute() {
        parent::preExecute();
        if (configuracionTable::getHabilitado() == 0) {
            $this->forward('deshabilitado', 'index');
        }
    }
    public function executeIndex(sfWebRequest $request) {
        
    }

}
