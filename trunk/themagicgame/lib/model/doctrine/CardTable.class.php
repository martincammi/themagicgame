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
	
	public static function findByCardIdAndExpansion($cardId, $expansionId){
	  	
	    $aCard = Doctrine::getTable('Card')
      ->createQuery('c')
      ->where('c.cardId = ?',$cardId)
      ->andWhere('c.Idexpansion = ?',$expansionId)
      ->execute();
	    
	   return $aCard;  
	}
	
	public static function findByExpansionAndRarity($rarity, $expansionId){
	  	
	    $cards = Doctrine::getTable('Card')
      ->createQuery('c')
      ->where('c.rarity = ?',$rarity)
      ->andWhere('c.Idexpansion = ?',$expansionId)
      ->execute();
	    
	   return $cards;  
	}
}