<?php

/**
 * Item form base class.
 *
 * @method Item getObject() Returns the current form's model object
 *
 * @package    themagicgame
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseItemForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'      => new sfWidgetFormInputHidden(),
      'number'  => new sfWidgetFormInputText(),
      'idcard'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Card'), 'add_empty' => false)),
      'idorder' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Orders'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'number'  => new sfValidatorInteger(array('required' => false)),
      'idcard'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Card'), 'required' => false)),
      'idorder' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Orders'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('item[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Item';
  }

}
