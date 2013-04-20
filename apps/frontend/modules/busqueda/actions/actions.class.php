<?php

class busquedaActions extends sfActions {
	public function preExecute() {
		parent::preExecute ();
		if (configuracionTable::getHabilitado () == 0) {
			$this->forward ( 'deshabilitado', 'index' );
		}
	}
	
	public function executeSearch(sfWebRequest $request) {
		$cat = $request->getParameter ( 'cat' );
		if ($cat != 0) {
			if ($nom = $request->getParameter ( 'nombre' )) {
				$nomLike = '%' . $nom . '%';
				$this->podcasts = Doctrine_Query::create ()->from ( 'podcast p' )->where ( 'p.habilitado=1 and p.id IN (SELECT e.id_podcast FROM episodio e)' )->andWhere ( 'p.idcategoria = ?', $cat )->andWhere ( 'p.nombre LIKE ?', $nomLike )->orderby ( 'p.id DESC' )->limit ( configuracionTable::getCantItemsFrontEnd () )->execute ();
			} else
				$this->podcasts = Doctrine_Query::create ()->from ( 'podcast p' )->where ( 'p.habilitado=1 and p.id IN (SELECT e.id_podcast FROM episodio e)' )->andWhere ( 'p.idcategoria = ?', $cat )->orderby ( 'p.id DESC' )->limit ( configuracionTable::getCantItemsFrontEnd () )->execute ();
		
		} else {
			if ($nom = $request->getParameter ( 'nombre' )) {
				$nomLike = '%' . $nom . '%';
				$this->podcasts = Doctrine_Query::create ()->from ( 'podcast p' )->where ( 'p.habilitado=1 and p.id IN (SELECT e.id_podcast FROM episodio e)' )->andWhere ( 'p.nombre LIKE ?', $nomLike )->orderby ( 'p.id DESC' )->limit ( configuracionTable::getCantItemsFrontEnd () )->execute ();
			} else
				$this->podcasts = Doctrine_Query::create ()->from ( 'podcast p' )->where ( 'p.habilitado=1 and p.id IN (SELECT e.id_podcast FROM episodio e)' )->orderby ( 'p.id DESC' )->limit ( configuracionTable::getCantItemsFrontEnd () )->execute ();
		}
		$this->setLayout ( false );
	}
}