<?php

  $sectionTitle='Desktop Section - ';

  require($siteRoot . '/modules/linux/linuxBaseHeader.tpl');

?>

<body onload="getDesktopData()">

    <?php include ($siteRoot . '/modules/linux/linuxNavMenu.tpl'); ?>

    <div class="main-section--right-wide">
      <div class="sidebar">
        <?php include($siteRoot . '/linuxHQ/modules/sections/linuxDECol1.tpl'); ?>
      </div>
      <div class="primary-content d-flex flex-wrap" id="desktopSection">

      </div>
    </div>

    <script src="/linuxHQ/scripts/desktopsFrontpage-min.js"></script>

  <?php include($siteRoot . "/modules/footer.tpl"); ?>
