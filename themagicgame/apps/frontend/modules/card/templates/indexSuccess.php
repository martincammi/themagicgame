<h1>Cards List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Namespanish</th>
      <th>Nameenglish</th>
      <th>Cost</th>
      <th>Cardid</th>
      <th>State</th>
      <th>Stock</th>
      <th>Idexpansion</th>
      <th>Iddetails</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($cards as $card): ?>
    <tr>
      <td><a href="<?php echo url_for('card/show?id='.$card->getId()) ?>"><?php echo $card->getId() ?></a></td>
      <td><?php echo $card->getNamespanish() ?></td>
      <td><?php echo $card->getNameenglish() ?></td>
      <td><?php echo $card->getCost() ?></td>
      <td><?php echo $card->getCardid() ?></td>
      <td><?php echo $card->getState() ?></td>
      <td><?php echo $card->getStock() ?></td>
      <td><?php echo $card->getIdexpansion() ?></td>
      <td><?php echo $card->getIddetails() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('card/new') ?>">New</a>
