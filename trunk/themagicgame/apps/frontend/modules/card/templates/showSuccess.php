<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $card->getId() ?></td>
    </tr>
    <tr>
      <th>Namespanish:</th>
      <td><?php echo $card->getNamespanish() ?></td>
    </tr>
    <tr>
      <th>Nameenglish:</th>
      <td><?php echo $card->getNameenglish() ?></td>
    </tr>
    <tr>
      <th>Cost:</th>
      <td><?php echo $card->getCost() ?></td>
    </tr>
    <tr>
      <th>Cardid:</th>
      <td><?php echo $card->getCardid() ?></td>
    </tr>
    <tr>
      <th>State:</th>
      <td><?php echo $card->getState() ?></td>
    </tr>
    <tr>
      <th>Stock:</th>
      <td><?php echo $card->getStock() ?></td>
    </tr>
    <tr>
      <th>Idexpansion:</th>
      <td><?php echo $card->getIdexpansion() ?></td>
    </tr>
    <tr>
      <th>Iddetails:</th>
      <td><?php echo $card->getIddetails() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('card/edit?id='.$card->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('card/index') ?>">List</a>
