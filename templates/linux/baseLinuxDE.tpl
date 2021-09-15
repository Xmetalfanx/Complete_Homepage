<?php
    require($rootDir . '/modules/linux/linuxBaseHeader.tpl');
?>

<body onload="getDesktopData()">

  <?php require($rootDir . '/modules/linux/linuxNavMenu.tpl'); ?>

  <div class="main-section main-section--right-wide">
    <div class="sidebar">
      <?php require($rootDir . '/linuxHQ/modules/sections/linuxDECol1.tpl'); ?>
    </div>
    <div id="desktopSection" class="primary-content" >

    </div>
  </div>

<script src="http://xmetal.x10.mx/linuxHQ/scripts/desktops-min.js"></script>

<?php require($rootDir . "/modules/footer.tpl"); ?>
