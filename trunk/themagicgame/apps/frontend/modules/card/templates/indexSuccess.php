<h1>Cards List</h1>

<div id="cards">
<table class="cards">
  <thead>
    <tr>
      <td class="columnTitle">Carta</td>
      <td class="columnTitle">Precio</td>
      <td class="columnTitle">Stock</td>
      <td class="columnTitle">Idexpansion</td>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($cards as $i => $card): ?>
      <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
	      <td class="cardName">
			<a href="<?php echo url_for('card/show?id='.$card->getId()) ?>">
			<?php echo $card->getNameenglish() ?>
			<?php if($card->getState() != 'ok'){
				  echo ' ('.$card->getState().')' ;
                 	      }
			?>
	      </td>
	      <td class="data">$ <?php echo $card->getCost() ?></td>
	      <td class="data"><?php echo $card->getStock() ?></td>
	      <td class="data"><?php echo $card->getIdexpansion() ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>




  <a href="<?php echo url_for('card/new') ?>">New</a>
