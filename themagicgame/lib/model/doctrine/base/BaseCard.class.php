<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Card', 'doctrine');

/**
 * BaseCard
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $namespanish
 * @property string $nameenglish
 * @property integer $cost
 * @property integer $cardid
 * @property string $state
 * @property string $rarity
 * @property integer $stock
 * @property integer $idexpansion
 * @property integer $iddetails
 * @property Expansion $Expansion
 * @property Doctrine_Collection $Item
 * 
 * @method integer             getId()          Returns the current record's "id" value
 * @method string              getNamespanish() Returns the current record's "namespanish" value
 * @method string              getNameenglish() Returns the current record's "nameenglish" value
 * @method integer             getCost()        Returns the current record's "cost" value
 * @method integer             getCardid()      Returns the current record's "cardid" value
 * @method string              getState()       Returns the current record's "state" value
 * @method string              getRarity()      Returns the current record's "rarity" value
 * @method integer             getStock()       Returns the current record's "stock" value
 * @method integer             getIdexpansion() Returns the current record's "idexpansion" value
 * @method integer             getIddetails()   Returns the current record's "iddetails" value
 * @method Expansion           getExpansion()   Returns the current record's "Expansion" value
 * @method Doctrine_Collection getItem()        Returns the current record's "Item" collection
 * @method Card                setId()          Sets the current record's "id" value
 * @method Card                setNamespanish() Sets the current record's "namespanish" value
 * @method Card                setNameenglish() Sets the current record's "nameenglish" value
 * @method Card                setCost()        Sets the current record's "cost" value
 * @method Card                setCardid()      Sets the current record's "cardid" value
 * @method Card                setState()       Sets the current record's "state" value
 * @method Card                setRarity()      Sets the current record's "rarity" value
 * @method Card                setStock()       Sets the current record's "stock" value
 * @method Card                setIdexpansion() Sets the current record's "idexpansion" value
 * @method Card                setIddetails()   Sets the current record's "iddetails" value
 * @method Card                setExpansion()   Sets the current record's "Expansion" value
 * @method Card                setItem()        Sets the current record's "Item" collection
 * 
 * @package    themagicgame
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCard extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('Card');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('namespanish', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('nameenglish', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('cost', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'default' => '0',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('cardid', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('state', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('rarity', 'string', 10, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 10,
             ));
        $this->hasColumn('stock', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('idexpansion', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('iddetails', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'default' => '0',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Expansion', array(
             'local' => 'idexpansion',
             'foreign' => 'id'));

        $this->hasMany('Item', array(
             'local' => 'id',
             'foreign' => 'idcard'));
    }
}