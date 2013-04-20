<?php

require_once dirname(__FILE__) . '/../lib/podcastGeneratorConfiguration.class.php';
require_once dirname(__FILE__) . '/../lib/podcastGeneratorHelper.class.php';

/**
 * podcast actions.
 *
 * @package    entrega3
 * @subpackage podcast
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class podcastActions extends autoPodcastActions {

    public function executeIndex(sfWebRequest $request) {
        parent::executeIndex($request);
        $this->pager = new sfDoctrinePager('podcast', configuracionTable::getCantItemsBackEnd());
        $this->pager->setPage($request->getParameter('page', 1));        
        $this->pager->init();
        
    }
    
}
