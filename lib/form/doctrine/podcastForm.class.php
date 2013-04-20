<?php

/**
 * podcast form.
 *
 * @package    entrega3
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class podcastForm extends BasepodcastForm {
	
	public function configure() {
		
		parent::setUp ();
		unset ( $this ['created_at'], $this ['updated_at'] );
		
		
		if ( empty ( $this ['idUsuario'] )) {
			$this->setWidget ( 'idUsuario', new sfWidgetFormInputHidden ( array (), array ('value' => sfContext::getInstance ()->getUser ()->getGuardUser ()->getId () ) ) );
		}
		$categorias = categoriaTable::getCategorias ();
		$opciones = array ();
		foreach ( $categorias as $categoria )
			$opciones [$categoria->getId ()] = $categoria->getNombre ();
		
		$this->setWidget ( 'idCategoria', new sfWidgetFormSelect ( array ('choices' => $opciones ) ) );
		$this->setWidget ( 'imagen', new sfWidgetFormInputFileEditable ( array ('edit_mode' => false, 'with_delete' => false, 'file_src' => '' ) ) );
		
		$this->widgetSchema ['users_list'] = new sfWidgetFormDoctrineChoice ( array ('multiple' => true, 'model' => 'sfGuardUser', 'renderer_class' => 'sfWidgetFormSelectDoubleList' ) );
		$this->getWidget ( 'users_list' )->setOption ( 'renderer_options', array ('label_unassociated' => 'usuarios sistemas', 'label_associated' => 'seguidores podcast' ) );
		
		$this->setValidator ( 'imagen', new sfValidatorFile ( array ('max_size' => 500000, 'mime_types' => 'web_images', 'path' => $_SERVER ['DOCUMENT_ROOT'] . '/uploads/imagenes', 'required' => true, 'validated_file_class' => 'sfValidatedFileCustom' ) ) );
	
	}

}
