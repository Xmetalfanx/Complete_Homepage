<?php

  $sectionTitle='Desktop Section - ';

  require($rootDir . '/modules/linux/linuxBaseHeader.tpl');

?>

<body onload="getDesktopData()">

    <?php include ($rootDir . '/modules/linux/linuxNavMenu.tpl'); ?>

    <div class="main-section--right-wide">
      <div class="sidebar">
        <?php include($rootDir . '/linuxHQ/modules/sections/linuxDECol1.tpl'); ?>
      </div>
      <div class="primary-content d-flex flex-wrap" id="desktopSection">

      </div>
    </div>

    <script src="/linuxHQ/scripts/desktopsFrontpage-min.js"></script>

  <?php include($rootDir . "/modules/footer.tpl"); ?>
