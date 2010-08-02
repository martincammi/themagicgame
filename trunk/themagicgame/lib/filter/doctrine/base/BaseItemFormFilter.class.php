<?php

/**
 * Item filter form base class.
 *
 * @package    themagicgame
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseItemFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'number'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'idcard'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Card'), 'add_empty' => true)),
      'idorder' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Orders'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'number'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'idcard'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Card'), 'column' => 'id')),
      'idorder' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Orders'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('item_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Item';
  }

  public function getFields()
  {
    return array(
      'id'      => 'Number',
      'number'  => 'Number',
      'idcard'  => 'ForeignKey',
      'idorder' => 'ForeignKey',
    );
  }
}
