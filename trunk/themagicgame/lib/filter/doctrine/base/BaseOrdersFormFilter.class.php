<?php

/**
 * Orders filter form base class.
 *
 * @package    themagicgame
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseOrdersFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'created_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'comment'       => new sfWidgetFormFilterInput(),
      'iduser'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
      'idpaymenttype' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Payment'), 'add_empty' => true)),
      'iddispathtype' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Dispatch'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'created_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'comment'       => new sfValidatorPass(array('required' => false)),
      'iduser'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('User'), 'column' => 'id')),
      'idpaymenttype' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Payment'), 'column' => 'id')),
      'iddispathtype' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Dispatch'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('orders_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Orders';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'created_at'    => 'Date',
      'comment'       => 'Text',
      'iduser'        => 'ForeignKey',
      'idpaymenttype' => 'ForeignKey',
      'iddispathtype' => 'ForeignKey',
    );
  }
}
