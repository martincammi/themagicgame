<?php

/**
 * Card form base class.
 *
 * @method Card getObject() Returns the current form's model object
 *
 * @package    themagicgame
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCardForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'namespanish' => new sfWidgetFormTextarea(),
      'nameenglish' => new sfWidgetFormTextarea(),
      'cost'        => new sfWidgetFormInputText(),
      'cardid'      => new sfWidgetFormInputText(),
      'state'       => new sfWidgetFormTextarea(),
      'stock'       => new sfWidgetFormInputText(),
      'idexpansion' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Expansion'), 'add_empty' => false)),
      'iddetails'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'namespanish' => new sfValidatorString(),
      'nameenglish' => new sfValidatorString(),
      'cost'        => new sfValidatorInteger(array('required' => false)),
      'cardid'      => new sfValidatorInteger(array('required' => false)),
      'state'       => new sfValidatorString(array('required' => false)),
      'stock'       => new sfValidatorInteger(array('required' => false)),
      'idexpansion' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Expansion'), 'required' => false)),
      'iddetails'   => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('card[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Card';
  }

}
