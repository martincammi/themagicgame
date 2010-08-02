<?php

/**
 * User filter form base class.
 *
 * @package    themagicgame
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseUserFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'user'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'password'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'name'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'surname'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'email'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'idaddress' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'user'      => new sfValidatorPass(array('required' => false)),
      'password'  => new sfValidatorPass(array('required' => false)),
      'name'      => new sfValidatorPass(array('required' => false)),
      'surname'   => new sfValidatorPass(array('required' => false)),
      'email'     => new sfValidatorPass(array('required' => false)),
      'idaddress' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('user_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'User';
  }

  public function getFields()
  {
    return array(
      'id'        => 'Number',
      'user'      => 'Text',
      'password'  => 'Text',
      'name'      => 'Text',
      'surname'   => 'Text',
      'email'     => 'Text',
      'idaddress' => 'Number',
    );
  }
}
