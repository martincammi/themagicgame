<?php

/**
 * card actions.
 *
 * @package    themagicgame
 * @subpackage card
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class cardActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->cards = Doctrine::getTable('Card')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->card = Doctrine::getTable('Card')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->card);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new CardForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new CardForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($card = Doctrine::getTable('Card')->find(array($request->getParameter('id'))), sprintf('Object card does not exist (%s).', $request->getParameter('id')));
    $this->form = new CardForm($card);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($card = Doctrine::getTable('Card')->find(array($request->getParameter('id'))), sprintf('Object card does not exist (%s).', $request->getParameter('id')));
    $this->form = new CardForm($card);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($card = Doctrine::getTable('Card')->find(array($request->getParameter('id'))), sprintf('Object card does not exist (%s).', $request->getParameter('id')));
    $card->delete();

    $this->redirect('card/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $card = $form->save();

      $this->redirect('card/edit?id='.$card->getId());
    }
  }
}
