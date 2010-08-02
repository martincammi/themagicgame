<?php

/**
 * User form base class.
 *
 * @method User getObject() Returns the current form's model object
 *
 * @package    themagicgame
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseUserForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'        => new sfWidgetFormInputHidden(),
      'user'      => new sfWidgetFormTextarea(),
      'password'  => new sfWidgetFormTextarea(),
      'name'      => new sfWidgetFormTextarea(),
      'surname'   => new sfWidgetFormTextarea(),
      'email'     => new sfWidgetFormTextarea(),
      'idaddress' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'user'      => new sfValidatorString(),
      'password'  => new sfValidatorString(),
      'name'      => new sfValidatorString(),
      'surname'   => new sfValidatorString(),
      'email'     => new sfValidatorString(),
      'idaddress' => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('user[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'User';
  }

}
