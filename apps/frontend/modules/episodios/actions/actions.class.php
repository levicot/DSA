<?php

/**
 * episodios actions.
 *
 * @package    entrega3
 * @subpackage episodios
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class episodiosActions extends sfActions {
	
	/**
	 * Executes index action
	 *
	 * @param sfRequest $request A request object
	 */
	public function preExecute() {
		parent::preExecute ();
		if (configuracionTable::getHabilitado () == 0) {
			$this->forward ( 'deshabilitado', 'index' );
		}
	}
	
	public function executeShow(sfWebRequest $request) {
		
		//echo Doctrine::getTable('episodio')->createQuery('e')->where('e.idpodcast = ?', $request->getParameter ( 'id' ));
		$this->podcast = podcastTable::getPodcastDeEpisodio ( $request->getParameter ( 'id' ) );
		$this->pager = new sfDoctrinePager ( 'episodio', configuracionTable::getCantItemsFrontEnd () );
		$this->pager->setQuery ( Doctrine::getTable ( 'episodio' )->createQuery ( 'e' )->where ( 'e.id_podcast = ?', $request->getParameter ( 'id' ) ) );
		$this->pager->setPage ( $request->getParameter ( 'page', 1 ) );
		$this->pager->init ();
		$this->setLayout ( false );
	}
	
	public function executeDownload(sfWebRequest $request) {
		$namefile = $request->getParameter ( 'file' );
		$file = $_SERVER ['DOCUMENT_ROOT'] . '/uploads/podcast/' . $namefile;
		$this->getResponse ()->clearHttpHeaders ();
		$this->getResponse ()->setStatusCode ( 200 );
		if (eregi ( "MSIE", $_SERVER ['HTTP_USER_AGENT'] ))
			$this->getResponse ()->setContentType ( 'audio/mpeg' );
		else
			$this->getResponse ()->setContentType ( 'application/ogg' );
		$this->getResponse ()->setHttpHeader ( 'Pragma', 'public' );
		$this->getResponse ()->setHttpHeader ( 'Expires', 0 );
		$this->getResponse ()->setHttpHeader ( 'Content-Disposition', "attachment; filename=$namefile" );
		$this->getResponse ()->setHttpHeader ( 'Content-Transfer-Encoding', 'binary' );
		$this->getResponse ()->setHttpHeader ( 'Content-Length', filesize ( $file ) );
		
		return $this->renderText ( file_get_contents ( $file ) );
	
	}
}
