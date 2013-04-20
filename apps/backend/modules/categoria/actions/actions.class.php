<?php

require_once dirname(__FILE__) . '/../lib/categoriaGeneratorConfiguration.class.php';
require_once dirname(__FILE__) . '/../lib/categoriaGeneratorHelper.class.php';

/**
 * categoria actions.
 *
 * @package    entrega3
 * @subpackage categoria
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class categoriaActions extends autoCategoriaActions {

    public function executeIndex(sfWebRequest $request) {
        parent::executeIndex($request);
        $this->pager = new sfDoctrinePager('categoria', configuracionTable::getCantItemsBackEnd());
        $this->pager->setPage($request->getParameter('page', 1));
        $this->pager->init();
    }

}
