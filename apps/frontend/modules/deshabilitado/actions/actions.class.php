<?php

class deshabilitadoActions extends sfActions {

    public function executeIndex(sfWebRequest $request) {
        $this->setLayout(false);
    }

}
