<?php

/**
 * card module configuration.
 *
 * @package    themagicgame
 * @subpackage card
 * @author     Your name here
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCardGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'card' : 'card_'.$action;
  }
}
