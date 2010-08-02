<?php

/**
 * Orders form base class.
 *
 * @method Orders getObject() Returns the current form's model object
 *
 * @package    themagicgame
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseOrdersForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'created_at'    => new sfWidgetFormDate(),
      'comment'       => new sfWidgetFormTextarea(),
      'iduser'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => false)),
      'idpaymenttype' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Payment'), 'add_empty' => false)),
      'iddispathtype' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Dispatch'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'created_at'    => new sfValidatorDate(),
      'comment'       => new sfValidatorString(array('required' => false)),
      'iduser'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'required' => false)),
      'idpaymenttype' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Payment'), 'required' => false)),
      'iddispathtype' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Dispatch'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('orders[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Orders';
  }

}
