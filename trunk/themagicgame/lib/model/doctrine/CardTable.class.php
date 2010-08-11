<?php


class CardTable extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Card');
    }
    
	public static function loadCard($cardId){
	  	
	    $card = Doctrine::getTable('Card')->find(array($cardId));
	    $expansion = Doctrine::getTable('Expansion')->find(array($card->getIdexpansion()));
	    
	    $card->setIdexpansion($expansion); 
	    
	    return $card;  
	}
}