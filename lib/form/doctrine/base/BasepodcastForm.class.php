<?php

/**
 * podcast form base class.
 *
 * @method podcast getObject() Returns the current form's model object
 *
 * @package    entrega3
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasepodcastForm extends BaseFormDoctrine {

    public function setup() {
        $this->setWidgets(array(
            'id' => new sfWidgetFormInputHidden(),
            'nombre' => new sfWidgetFormInputText(),
            'descripcion' => new sfWidgetFormTextarea(),
            'rss' => new sfWidgetFormInputText(),
            'habilitado' => new sfWidgetFormInputCheckbox(),
            'idCategoria' => new sfWidgetFormInputText(),
            'created_at' => new sfWidgetFormDateTime(),
            'updated_at' => new sfWidgetFormDateTime(),
        ));

        $this->setValidators(array(
            'id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
            'nombre' => new sfValidatorString(array('max_length' => 100)),
            'descripcion' => new sfValidatorString(array('max_length' => 4000)),
            'rss' => new sfValidatorString(array('max_length' => 255)),
            'habilitado' => new sfValidatorBoolean(array('required' => false)),
            'idUsuario' => new sfValidatorInteger(),
            'idCategoria' => new sfValidatorInteger(array('required' => false)),
            'created_at' => new sfValidatorDateTime(),
            'updated_at' => new sfValidatorDateTime(),
            'users_list'  => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardUser', 'required' => false)),
        ));

        $this->widgetSchema->setNameFormat('podcast[%s]');

        $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

        $this->setupInheritance();

        parent::setup();
    }

    public function getModelName() {
        return 'podcast';
    }

    public function updateDefaultsFromObject() {
        parent::updateDefaultsFromObject();

        if (isset($this->widgetSchema['users_list'])) {
            $this->setDefault('users_list', $this->object->Users->getPrimaryKeys());
        }
    }

    protected function doSave($con = null) {
        $this->saveUsersList($con);

        parent::doSave($con);
    }

    public function saveUsersList($con = null) {
        if (!$this->isValid()) {
            throw $this->getErrorSchema();
        }

        if (!isset($this->widgetSchema['users_list'])) {
            // somebody has unset this widget
            return;
        }

        if (null === $con) {
            $con = $this->getConnection();
        }

        $existing = $this->object->Users->getPrimaryKeys();
        $values = $this->getValue('users_list');
        if (!is_array($values)) {
            $values = array();
        }

        $unlink = array_diff($existing, $values);
        if (count($unlink)) {
            $this->object->unlink('Users', array_values($unlink));
        }

        $link = array_diff($values, $existing);
        if (count($link)) {
            $this->object->link('Users', array_values($link));
        }
    }

}
