<?php

/**
 * configuracion form base class.
 *
 * @method configuracion getObject() Returns the current form's model object
 *
 * @package    entrega3
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseconfiguracionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'titulo'            => new sfWidgetFormInputText(),
      'cantItemsFrontEnd' => new sfWidgetFormInputText(),
      'cantItemsBackEnd'  => new sfWidgetFormInputText(),
      'estilo'            => new sfWidgetFormSelect(array("choices" => array(1 => 'Default',2 => 'Other Style'))),
      'habilitado'        => new sfWidgetFormInputCheckbox(),
      'mensajeerror'      => new sfWidgetFormInputText(),
      'created_at'        => new sfWidgetFormDateTime(),
      'updated_at'        => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'titulo'            => new sfValidatorString(array('max_length' => 15)),
      'cantItemsFrontEnd' => new sfValidatorInteger(),
      'cantItemsBackEnd'  => new sfValidatorInteger(),
      'estilo'            => new sfValidatorString(array('max_length' => 30)),
      'habilitado'        => new sfValidatorBoolean(array('required' => false)),
      'mensajeerror'      => new sfValidatorString(array('max_length' => 100)),
      'created_at'        => new sfValidatorDateTime(),
      'updated_at'        => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('configuracion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'configuracion';
  }

}
