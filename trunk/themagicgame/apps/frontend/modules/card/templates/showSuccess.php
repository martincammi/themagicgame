<!-- apps/frontend/modules/job/templates/showSuccess.php -->
<?php use_stylesheet('card.css') ?>
<?php use_helper('Text') ?>
 
<div id="card">

  <div class="barTitle">
   
   	<div class="previousCard">
  		<a href="<?php echo url_for('card/show?id='.$previousCard->getId()) ?>">
  	   		<?php echo $previousCard->getNameenglish() ?>
  		</a>
  	</div>
  
  	<div class="expansionTitle">    
		<!-- none by now -->
  	</div>
  
  	<div class="nextCard">
	  	<a href="<?php echo url_for('card/show?id='.$nextCard->getId()) ?>">
  			<?php echo $nextCard->getNameEnglish() ?>
  		</a>	
  	</div>
  </div>
  
  <h3>
    <?php echo $card->getNameEnglish() ?>
  </h3>
  
  <div>
  <div class="cardDescription">
	  <div class="image">
	     <a href="<?php echo url_for('card/index?expansion='.$card->getExpansion()->getAbbreviation()) ?>">
	       <img class="imageProp" src="/images/cards/<?php echo $card->getExpansion()->getAbbreviation() ?>/<?php echo $card->getCardid() ?>.jpg"
	         alt="<?php echo $card->getExpansion() ?>" />
	     </a>
	   </div>
	   
	   <div class="cardDetails">
		   <div class="cardName">
	  		  <?php echo $card->getNameSpanish() ?> 
	  	   </div>
	  	   
	  	   <div class="row">
	  	   		<div class="formLabel">Precio:</div>
	  			<div class="formCost">
	  	  			$<?php echo $card->getCost() ?>
	  			</div>
	  	   </div>
	  	   
	  	   <div class="row">
	  	   		<div class="formLabel">Set:</div>
	  			<div class="formData">
	  	  			<?php echo $card->getExpansion()->getName() ?>
	  			</div>
	  		</div>
	  		
	  		<div class="row">
	  	   		<div class="formLabel">Rarity:</div>
	  			<div class="formData">
	  	  			<?php echo $card->getRarity() ?>
	  			</div>
	  		</div>
	  		
	  		<div class="row">
	  	   		<div class="formLabel">Stock: </div>
	  			<div class="formData">
	  				<?php echo $card->getStock() ?>
	  			</div>
	  		</div>
	  		
	  		<div class="row">
	  	   		<div class="formLabel">Card Text:</div>
	  			<div class="formData">
	  	  			Aca va la descripción
	  			</div>
	  		</div>
  		</div>
   </div>
   
  <div style="padding: 20px 0">
    <!--<a href="<?php echo url_for('card/edit?id='.$card->getId()) ?>">
      Edit
    </a> -->
  </div>
  </div>
</div>




