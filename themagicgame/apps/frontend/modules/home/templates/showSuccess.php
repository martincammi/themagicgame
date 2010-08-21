<!-- apps/frontend/modules/job/templates/showSuccess.php -->
<?php use_stylesheet('card.css') ?>
<?php use_helper('Text') ?>
 
<div id="card">
  <h1>
  &nbsp;
  <a href="<?php echo url_for('card/show?id='.$previousCard->getId()) ?>">
  	   <?php echo $previousCard->getNameenglish() ?>
  </a>
  </h1>
  <h3>
  <a href="<?php echo url_for('card/list') ?>">
      Todas las cartas
    </a>
  </h3>
  <h2>
  	&nbsp;
  	<a href="<?php echo url_for('card/show?id='.$nextCard->getId()) ?>">
  		<?php echo $nextCard->getNameenglish() ?>
  	</a>	
  </h2>
  
  <h3>
    <?php echo $card->getNameEnglish() ?>
  </h3>
  
  <div>
  <div class="row">
	  <div class="image">
	     <a href="<?php echo $card->getExpansion()->getName() ?>">
	       <img class="imageProp" src="/images/cards/<?php echo $card->getExpansion()->getAbbreviation() ?>/<?php echo $card->getCardid() ?>.jpg"
	         alt="<?php echo $expansion->getName() ?>" />
	     </a>
	   </div>
	   
	   <div class="title">
  		  <?php echo $card->getNameEnglish() ?>
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
  	  			Rare
  			</div>
  		</div>
  		
  		<div class="row">
  	   		<div class="formLabel">Precio:</div>
  			<div class="formCost">
  	  			$ <?php echo $card->getCost() ?>
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
   
  <div style="padding: 20px 0">
    <!--<a href="<?php echo url_for('card/edit?id='.$card->getId()) ?>">
      Edit
    </a> -->
  </div>
  </div>
</div>




