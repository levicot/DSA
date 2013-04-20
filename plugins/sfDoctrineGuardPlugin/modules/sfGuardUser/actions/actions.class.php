<?php

require_once dirname(__FILE__) . '/../lib/sfGuardUserGeneratorConfiguration.class.php';
require_once dirname(__FILE__) . '/../lib/sfGuardUserGeneratorHelper.class.php';

/**
 * sfGuardUser actions.
 *
 * @package    sfGuardPlugin
 * @subpackage sfGuardUser
 * @author     Fabien Potencier
 * @version    SVN: $Id: actions.class.php 23319 2009-10-25 12:22:23Z Kris.Wallsmith $
 */
class sfGuardUserActions extends autoSfGuardUserActions {

    public function executeUsers(sfWebRequest $request) {
        parent::executeUsers($request);
        $this->pager = new sfDoctrinePager('sf_guard_user', 2);
        $this->pager->setPage($request->getParameter('page', 1));
        $this->pager->init();
    }

}
