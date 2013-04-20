<?php
class rssActions extends sfActions {
	
	public function executeIndex(sfWebRequest $request) {

		$podcasts = podcastTable::getPodcastRss();
		
		$feed = sfFeedPeer::newInstance('rss201');
		$feed->setTitle("Canal de feed de podcast's ");
		$feed->setLink ('https://grupo83.proyecto2011.linti.unlp.edu.ar/alumno/entrega3/web/');
		$feed->setAuthorName('Agustin Datri - Gonzalez Joaquin');
		$feed->setDescription('Canal de rss para podcast');
		
		foreach ( $podcasts as $podcast ) {
			$item = new sfFeedItem();
			$item->setTitle ( "" . $podcast->getNombre() );
			$item->setLink ( 'https://grupo83.proyecto2011.linti.unlp.edu.ar/alumno/entrega3/web/rss/show/id/'. $podcast->getId());
			$desc = $podcast->getDescripcion().' Link Fuente: <a href="'.$podcast->getRss().'">'.$podcast->getRss().'</a>';
			$item->setDescription ($desc);
			$item->setPubdate($podcast->getCreatedAt());
			$item->setUniqueId($podcast->getId());
			$feed->addItem ( $item );
		}
		
		$this->feedPodcast = $feed;
		$this->setLayout(false);
		
		
	}
	
	public function executeShow(sfWebRequest $request) {
		$id = $request->getParameter ( 'id' );
		$podcast = podcastTable::getNombrePodcast($id);

		$feed = new sfRssFeed();
		$feed->setTitle ( $podcast[0]->getNombre() );
		$feed->setLink ( '@homepage' );

		$episodios = episodioTable::getEpisodios($podcast[0]->getId());
		
		foreach ( $episodios as $episodio ) {
			$item = new sfFeedItem();
			$item->setTitle ( "" . $episodio->getTitulo() );
			$item->setLink ( 'https://grupo83.proyecto2011.linti.unlp.edu.ar/alumno/entrega3/web/episodios/download?file='. $episodio->getAudio_ogg() );
			$item->setDescription ( $episodio->getDescripcion());
			$item->setUniqueId($episodio->getId());
			$feed->addItem ( $item );
		}
		
		$this->feedEpisodio = $feed;
		$this->setLayout(false);
	}

}
