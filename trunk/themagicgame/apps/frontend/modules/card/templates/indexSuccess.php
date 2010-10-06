<h1>Cards List <?php echo '- '.$expansionName; ?></h1>

<div id="cards">
<table class="cards">
  <tr class="title">
    <td>Carta</td>
    <td>Edit</td>
    <td>Precio</td>
    <td>Stock</td>
    <td>Rarity</td>
  </tr>
  <tbody>
    <?php foreach ($cards as $i => $card): ?>
      <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
	      <td class="cardName">
			<a href="<?php echo url_for('card/show?id='.$card->getId()) ?>">
			<?php echo $card->getNameenglish() ?>
			<?php if($card->getState() != 'NM'){
				  echo ' ('.$card->getState().')' ;
                 	      }
			?>
	      </td>
	      <td>
	      	<a href="<?php echo url_for('card/edit?id='.$card->getId()) ?>">Edit
    		</a></td>
	      <td class="data">$ <?php echo $card->getCost() ?></td>
	      <td class="data"><?php echo $card->getStock() ?></td>
	      
			<?php
				$abb = $card->getExpansion()->getAbbreviation();
				$rarity = $card->getRarity();
			?>
	      
		  <td class="data">
		  	<img src="/images/editions/exp_sym_<?php echo $abb ?>_<?php echo $rarity ?>.gif" alt="<?php echo $abb ?> <?php echo $rarity ?>">
		  </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>




  <a href="<?php echo url_for('card/new') ?>">New</a>
