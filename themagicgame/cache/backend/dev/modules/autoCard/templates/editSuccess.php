<?php use_helper('I18N', 'Date') ?>
<?php include_partial('card/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edit Card', array(), 'messages') ?></h1>

  <?php include_partial('card/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('card/form_header', array('card' => $card, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('card/form', array('card' => $card, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('card/form_footer', array('card' => $card, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
