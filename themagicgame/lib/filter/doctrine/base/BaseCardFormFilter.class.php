<?php

/**
 * Card filter form base class.
 *
 * @package    themagicgame
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCardFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'namespanish' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nameenglish' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cost'        => new sfWidgetFormFilterInput(),
      'cardid'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'state'       => new sfWidgetFormFilterInput(),
      'stock'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'idexpansion' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Expansion'), 'add_empty' => true)),
      'iddetails'   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'namespanish' => new sfValidatorPass(array('required' => false)),
      'nameenglish' => new sfValidatorPass(array('required' => false)),
      'cost'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cardid'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'state'       => new sfValidatorPass(array('required' => false)),
      'stock'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'idexpansion' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Expansion'), 'column' => 'id')),
      'iddetails'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('card_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Card';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'namespanish' => 'Text',
      'nameenglish' => 'Text',
      'cost'        => 'Number',
      'cardid'      => 'Number',
      'state'       => 'Text',
      'stock'       => 'Number',
      'idexpansion' => 'ForeignKey',
      'iddetails'   => 'Number',
    );
  }
}
