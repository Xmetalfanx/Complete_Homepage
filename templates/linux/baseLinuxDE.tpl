<?php
    require($path . '/modules/linux/linuxBaseHeader.tpl');
?>

<body onload="getDesktopData()">

  <?php require($path . '/modules/linux/linuxNavMenu.tpl'); ?>

  <div class="main-section main-section--right-wide">
    <div class="sidebar">
      <?php require($path . '/linuxHQ/modules/sections/linuxDECol1.tpl'); ?>
    </div>
    <div id="desktopSection" class="primary-content" >

    </div>
  </div>

<script src="http://xmetal.x10.mx/linuxHQ/scripts/desktops.js"></script>

<?php require($path . "/modules/footer.tpl"); ?>
