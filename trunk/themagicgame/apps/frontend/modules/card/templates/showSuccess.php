<!-- apps/frontend/modules/job/templates/showSuccess.php -->
<?php use_stylesheet('card.css') ?>
<?php use_helper('Text') ?>
 
<div id="card">
  <h1>
  &nbsp;
  <a href="<?php echo url_for('card/show?id='.$previousCard->getId()) ?>">
  	   <?php echo $previousCard->getNameenglish() ?>
  </a> <-
  </h1>
  <h2>
  	&nbsp; ->
  	<a href="<?php echo url_for('card/show?id='.$nextCard->getId()) ?>">
  		<?php echo $nextCard->getNameenglish() ?>
  	</a>	
  </h2>
  
  <h3>
    <?php echo $card->getNameEnglish() ?>
  </h3>
  
  <div>
  <div class="image">
     <a href="<?php echo $expansion->getName() ?>">
       <img class="imageProp" src="/images/cards/<?php echo $expansion->getAbbreviation() ?>/<?php echo $card->getCardid() ?>.jpg"
         alt="<?php echo $expansion->getName() ?>" />
     </a>
   </div>
   
  <h4><?php echo $card->getNameEnglish() ?></h4>
  
  <div class="description">
  	  Set: <?php echo $expansion->getName() ?>
  </div>
  
  <div class="description">
  	Desciopcion: detalle de la carta
    <?php //simple_format_text($card->getDescription()) ?>
  </div>
 
  <div class="description">
    Precio: $<?php echo $card->getCost() ?>
  </div>
  
  <div class="description">
    Stock: <?php echo $card->getStock() ?>
  </div>
 
  <div style="padding: 20px 0">
    <!--<a href="<?php echo url_for('card/edit?id='.$card->getId()) ?>">
      Edit
    </a> -->
  </div>
  </div>
</div>




