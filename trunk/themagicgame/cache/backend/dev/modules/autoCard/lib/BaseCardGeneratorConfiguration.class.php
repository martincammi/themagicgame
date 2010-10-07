<?php

/**
 * card module configuration.
 *
 * @package    themagicgame
 * @subpackage card
 * @author     Your name here
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCardGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
    return array(  '_edit' => NULL,  '_delete' => NULL,);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%id%% - %%namespanish%% - %%nameenglish%% - %%cost%% - %%cardid%% - %%state%% - %%rarity%% - %%stock%% - %%idexpansion%% - %%iddetails%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Card List';
  }

  public function getEditTitle()
  {
    return 'Edit Card';
  }

  public function getNewTitle()
  {
    return 'New Card';
  }

  public function getFilterDisplay()
  {
    return array();
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => 'id',  1 => 'namespanish',  2 => 'nameenglish',  3 => 'cost',  4 => 'cardid',  5 => 'state',  6 => 'rarity',  7 => 'stock',  8 => 'idexpansion',  9 => 'iddetails',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'namespanish' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'nameenglish' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'cost' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'cardid' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'state' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'rarity' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'stock' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'idexpansion' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'iddetails' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'namespanish' => array(),
      'nameenglish' => array(),
      'cost' => array(),
      'cardid' => array(),
      'state' => array(),
      'rarity' => array(),
      'stock' => array(),
      'idexpansion' => array(),
      'iddetails' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'namespanish' => array(),
      'nameenglish' => array(),
      'cost' => array(),
      'cardid' => array(),
      'state' => array(),
      'rarity' => array(),
      'stock' => array(),
      'idexpansion' => array(),
      'iddetails' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'namespanish' => array(),
      'nameenglish' => array(),
      'cost' => array(),
      'cardid' => array(),
      'state' => array(),
      'rarity' => array(),
      'stock' => array(),
      'idexpansion' => array(),
      'iddetails' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'namespanish' => array(),
      'nameenglish' => array(),
      'cost' => array(),
      'cardid' => array(),
      'state' => array(),
      'rarity' => array(),
      'stock' => array(),
      'idexpansion' => array(),
      'iddetails' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'namespanish' => array(),
      'nameenglish' => array(),
      'cost' => array(),
      'cardid' => array(),
      'state' => array(),
      'rarity' => array(),
      'stock' => array(),
      'idexpansion' => array(),
      'iddetails' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'CardForm';
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'CardFormFilter';
  }

  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 20;
  }

  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getTableMethod()
  {
    return '';
  }

  public function getTableCountMethod()
  {
    return '';
  }
}
