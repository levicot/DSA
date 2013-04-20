<?php

/**
 * configuracion filter form base class.
 *
 * @package    entrega3
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseconfiguracionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'titulo'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cantItemsFrontEnd' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cantItemsBackEnd'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'estilo'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'habilitado'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'mensajeerror'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'titulo'            => new sfValidatorPass(array('required' => false)),
      'cantItemsFrontEnd' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cantItemsBackEnd'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'estilo'            => new sfValidatorPass(array('required' => false)),
      'habilitado'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'mensajeerror'      => new sfValidatorPass(array('required' => false)),
      'created_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('configuracion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'configuracion';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'titulo'            => 'Text',
      'cantItemsFrontEnd' => 'Number',
      'cantItemsBackEnd'  => 'Number',
      'estilo'            => 'Text',
      'habilitado'        => 'Boolean',
      'mensajeerror'      => 'Text',
      'created_at'        => 'Date',
      'updated_at'        => 'Date',
    );
  }
}
