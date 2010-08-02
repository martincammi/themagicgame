<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Orders', 'doctrine');

/**
 * BaseOrders
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property date $created_at
 * @property string $comment
 * @property integer $iduser
 * @property integer $idpaymenttype
 * @property integer $iddispathtype
 * @property Dispatch $Dispatch
 * @property Payment $Payment
 * @property User $User
 * @property Doctrine_Collection $Item
 * 
 * @method integer             getId()            Returns the current record's "id" value
 * @method date                getCreatedAt()     Returns the current record's "created_at" value
 * @method string              getComment()       Returns the current record's "comment" value
 * @method integer             getIduser()        Returns the current record's "iduser" value
 * @method integer             getIdpaymenttype() Returns the current record's "idpaymenttype" value
 * @method integer             getIddispathtype() Returns the current record's "iddispathtype" value
 * @method Dispatch            getDispatch()      Returns the current record's "Dispatch" value
 * @method Payment             getPayment()       Returns the current record's "Payment" value
 * @method User                getUser()          Returns the current record's "User" value
 * @method Doctrine_Collection getItem()          Returns the current record's "Item" collection
 * @method Orders              setId()            Sets the current record's "id" value
 * @method Orders              setCreatedAt()     Sets the current record's "created_at" value
 * @method Orders              setComment()       Sets the current record's "comment" value
 * @method Orders              setIduser()        Sets the current record's "iduser" value
 * @method Orders              setIdpaymenttype() Sets the current record's "idpaymenttype" value
 * @method Orders              setIddispathtype() Sets the current record's "iddispathtype" value
 * @method Orders              setDispatch()      Sets the current record's "Dispatch" value
 * @method Orders              setPayment()       Sets the current record's "Payment" value
 * @method Orders              setUser()          Sets the current record's "User" value
 * @method Orders              setItem()          Sets the current record's "Item" collection
 * 
 * @package    themagicgame
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOrders extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('Orders');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('created_at', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('comment', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('iduser', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('idpaymenttype', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('iddispathtype', 'integer', 4, array(
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
        $this->hasOne('Dispatch', array(
             'local' => 'iddispathtype',
             'foreign' => 'id'));

        $this->hasOne('Payment', array(
             'local' => 'idpaymenttype',
             'foreign' => 'id'));

        $this->hasOne('User', array(
             'local' => 'iduser',
             'foreign' => 'id'));

        $this->hasMany('Item', array(
             'local' => 'id',
             'foreign' => 'idorder'));
    }
}