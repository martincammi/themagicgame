<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Dispatch', 'doctrine');

/**
 * BaseDispatch
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $descripcion
 * @property integer $cost
 * @property Doctrine_Collection $Orders
 * 
 * @method integer             getId()          Returns the current record's "id" value
 * @method string              getName()        Returns the current record's "name" value
 * @method string              getDescripcion() Returns the current record's "descripcion" value
 * @method integer             getCost()        Returns the current record's "cost" value
 * @method Doctrine_Collection getOrders()      Returns the current record's "Orders" collection
 * @method Dispatch            setId()          Sets the current record's "id" value
 * @method Dispatch            setName()        Sets the current record's "name" value
 * @method Dispatch            setDescripcion() Sets the current record's "descripcion" value
 * @method Dispatch            setCost()        Sets the current record's "cost" value
 * @method Dispatch            setOrders()      Sets the current record's "Orders" collection
 * 
 * @package    themagicgame
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDispatch extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('Dispatch');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('name', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('descripcion', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('cost', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Orders', array(
             'local' => 'id',
             'foreign' => 'iddispathtype'));
    }
}