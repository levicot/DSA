<?php

/**
 * episodio form.
 *
 * @package    entrega3
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class episodioForm extends BaseepisodioForm {
	
	public function configure() {
		
		parent::setUp ();
		unset ( $this ['created_at'], $this ['updated_at'] );
		
		$seguidores = podcast_usuarioTable::getMisPodcast ( sfContext::getInstance ()->getUser ()->getGuardUser ()->getId () );
		$opciones = array ();
		
		if (sfContext::getInstance ()->getUser ()->hasCredential ( 'admin' )) {
			$podcast = podcastTable::getPodcast();
			foreach ( $podcast as $pod )
				$opciones [$pod->getId ()] = $pod->getNombre ();
		
		} else {
			
			foreach ( $seguidores as $seguidor ) {
				$podcast = podcastTable::getNombrePodcast ( $seguidor->getPodcast_Id () );
				$opciones [$seguidor->getPodcast_Id ()] = $podcast [0]->getNombre ();
			}
			$misPodcast = podcastTable::getMisPodcast ( sfContext::getInstance ()->getUser ()->getGuardUser ()->getId () );
			foreach ( $misPodcast as $pod )
				$opciones [$pod->getId ()] = $pod->getNombre ();
		
		}
		
		$this->setWidget ( 'id_podcast', new sfWidgetFormSelect ( array ('choices' => ($opciones) ) ) );
		
		$this->setWidget ( 'audio_ogg', new sfWidgetFormInputFileEditable ( array ('edit_mode' => false, 'with_delete' => false, 'file_src' => '' ) ) );
		
		$this->setWidget ( 'audio_mp3', new sfWidgetFormInputFileEditable ( array ('edit_mode' => false, 'with_delete' => false, 'file_src' => '' ) ) );
		
		$this->setValidator ( 'audio_ogg', new sfValidatorFile ( array ('max_size' => 500000000,'mime_types'=>array('application/ogg'), 'path' => $_SERVER ['DOCUMENT_ROOT'] . '/uploads/podcast', 'required' => true, 'validated_file_class' => 'sfValidatedFileCustom' ) ) );
		
		$this->setValidator ( 'audio_mp3', new sfValidatorFile ( array ('max_size' => 500000000,'mime_types'=>array('audio/mpeg'), 'path' => $_SERVER ['DOCUMENT_ROOT'] . '/uploads/podcast', 'required' => true, 'validated_file_class' => 'sfValidatedFileCustom' ) ) );
	}

}
