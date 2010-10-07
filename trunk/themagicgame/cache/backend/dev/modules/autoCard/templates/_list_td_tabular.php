<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($card->getId(), 'card_edit', $card) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_namespanish">
  <?php echo $card->getNamespanish() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_nameenglish">
  <?php echo $card->getNameenglish() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_cost">
  <?php echo $card->getCost() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_cardid">
  <?php echo $card->getCardid() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_state">
  <?php echo $card->getState() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_rarity">
  <?php echo $card->getRarity() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_stock">
  <?php echo $card->getStock() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_idexpansion">
  <?php echo $card->getIdexpansion() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_iddetails">
  <?php echo $card->getIddetails() ?>
</td>
