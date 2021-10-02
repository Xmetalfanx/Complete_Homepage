<?php
    require($siteRoot . '/modules/linux/linuxBaseHeader.tpl');
?>

<body onload="getDesktopData()">

  <?php require($siteRoot . '/modules/linux/linuxNavMenu.tpl'); ?>

  <div class="main-section main-section--right-wide">
    <div class="sidebar">
      <?php require($siteRoot . '/linuxHQ/modules/sections/linuxDECol1.tpl'); ?>
    </div>
    <div id="desktopSection" class="primary-content" >

    </div>
  </div>

<script src="http://xmetal.x10.mx/linuxHQ/scripts/desktops-min.js"></script>

<?php require($siteRoot . "/modules/footer.tpl"); ?>
