<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('User', 'doctrine');

/**
 * BaseUser
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $user
 * @property string $password
 * @property string $name
 * @property string $surname
 * @property string $email
 * @property integer $idaddress
 * @property Doctrine_Collection $Orders
 * 
 * @method integer             getId()        Returns the current record's "id" value
 * @method string              getUser()      Returns the current record's "user" value
 * @method string              getPassword()  Returns the current record's "password" value
 * @method string              getName()      Returns the current record's "name" value
 * @method string              getSurname()   Returns the current record's "surname" value
 * @method string              getEmail()     Returns the current record's "email" value
 * @method integer             getIdaddress() Returns the current record's "idaddress" value
 * @method Doctrine_Collection getOrders()    Returns the current record's "Orders" collection
 * @method User                setId()        Sets the current record's "id" value
 * @method User                setUser()      Sets the current record's "user" value
 * @method User                setPassword()  Sets the current record's "password" value
 * @method User                setName()      Sets the current record's "name" value
 * @method User                setSurname()   Sets the current record's "surname" value
 * @method User                setEmail()     Sets the current record's "email" value
 * @method User                setIdaddress() Sets the current record's "idaddress" value
 * @method User                setOrders()    Sets the current record's "Orders" collection
 * 
 * @package    themagicgame
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUser extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('User');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('user', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('password', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
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
        $this->hasColumn('surname', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('email', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('idaddress', 'integer', 4, array(
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
        $this->hasMany('Orders', array(
             'local' => 'id',
             'foreign' => 'iduser'));
    }
}