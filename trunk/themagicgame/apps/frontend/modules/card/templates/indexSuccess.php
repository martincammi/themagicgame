<h1>Cards List</h1>

<div id="cards">
<table class="cards">
  <tr height="5">
    <td height="5" class="columnTitle">Carta</td>
    <td height="5" class="columnTitle">Precio</td>
    <td height="5" class="columnTitle">Stock</td>
  	<td height="5" class="columnTitle">Idexpansion</td>
  </tr>
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
