<?php

/**
 * items actions.
 *
 * @package    entrega3doctrine
 * @subpackage items
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class podcastComponents extends sfComponents {

	public function executeListadoPodcast() {
		$this->podcasts = Doctrine_Query::create()
						->from('podcast p')
						->where('p.habilitado=1 and p.id IN (SELECT e.id_podcast FROM episodio e)')
						->orderby('p.id DESC')
						->execute();
	}

}

?>