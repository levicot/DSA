<?php

/**
 * podcast filter form base class.
 *
 * @package    entrega3
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasepodcastFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descripcion' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'imagen'      => new sfWidgetFormFilterInput(),
      'rss'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'habilitado'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'idUsuario'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'idCategoria' => new sfWidgetFormFilterInput(),
      'created_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'users_list'  => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardUser')),
    ));

    $this->setValidators(array(
      'nombre'      => new sfValidatorPass(array('required' => false)),
      'descripcion' => new sfValidatorPass(array('required' => false)),
      'imagen'      => new sfValidatorPass(array('required' => false)),
      'rss'         => new sfValidatorPass(array('required' => false)),
      'habilitado'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'idUsuario'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'idCategoria' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'users_list'  => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardUser', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('podcast_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addUsersListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.podcast_usuario podcast_usuario')
      ->andWhereIn('podcast_usuario.usuario_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'podcast';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'nombre'      => 'Text',
      'descripcion' => 'Text',
      'imagen'      => 'Text',
      'rss'         => 'Text',
      'habilitado'  => 'Boolean',
      'idUsuario'   => 'Number',
      'idCategoria' => 'Number',
      'created_at'  => 'Date',
      'updated_at'  => 'Date',
      'users_list'  => 'ManyKey',
    );
  }
}
