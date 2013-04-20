<?php

/**
 * Baseconfiguracion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $titulo
 * @property integer $cantItemsFrontEnd
 * @property integer $cantItemsBackEnd
 * @property string $estilo
 * @property boolean $habilitado
 * @property string $mensajeerror
 * 
 * @method string        getTitulo()            Returns the current record's "titulo" value
 * @method integer       getCantItemsFrontEnd() Returns the current record's "cantItemsFrontEnd" value
 * @method integer       getCantItemsBackEnd()  Returns the current record's "cantItemsBackEnd" value
 * @method string        getEstilo()            Returns the current record's "estilo" value
 * @method boolean       getHabilitado()        Returns the current record's "habilitado" value
 * @method string        getMensajeerror()      Returns the current record's "mensajeerror" value
 * @method configuracion setTitulo()            Sets the current record's "titulo" value
 * @method configuracion setCantItemsFrontEnd() Sets the current record's "cantItemsFrontEnd" value
 * @method configuracion setCantItemsBackEnd()  Sets the current record's "cantItemsBackEnd" value
 * @method configuracion setEstilo()            Sets the current record's "estilo" value
 * @method configuracion setHabilitado()        Sets the current record's "habilitado" value
 * @method configuracion setMensajeerror()      Sets the current record's "mensajeerror" value
 * 
 * @package    entrega3
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Baseconfiguracion extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('configuracion');
        $this->hasColumn('titulo', 'string', 140, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 140,
             ));
        $this->hasColumn('cantItemsFrontEnd', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('cantItemsBackEnd', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('estilo', 'string', 30, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 30,
             ));
        $this->hasColumn('habilitado', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => 1,
             ));
        $this->hasColumn('mensajeerror', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}