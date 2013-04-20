<?php

require_once dirname(__FILE__) . '/../lib/episodioGeneratorConfiguration.class.php';
require_once dirname(__FILE__) . '/../lib/episodioGeneratorHelper.class.php';

/**
 * episodio actions.
 *
 * @package    entrega3
 * @subpackage episodio
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class episodioActions extends autoEpisodioActions {
    public function executeIndex(sfWebRequest $request) {
        parent::executeIndex($request);
        $this->pager = new sfDoctrinePager('episodio', configuracionTable::getCantItemsBackEnd());
        $this->pager->setPage($request->getParameter('page', 1));
        $this->pager->init();
    }

}
