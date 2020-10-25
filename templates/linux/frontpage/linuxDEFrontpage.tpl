<?php

  $sectionTitle='Desktop Section - ';

  require($path . '/modules/linux/linuxBaseHeader.tpl');

?>

<body onload="getDesktopData()">

    <?php include ($path . '/modules/linux/linuxNavMenu.tpl'); ?>

    <div class="main-section main-section--right-wide">
      <div class="sidebar">
        <?php include($path . '/linuxHQ/modules/sections/linuxDECol1.tpl'); ?>
      </div>
      <div class="primaryContent" id="desktopSection">

      </div>
    </div>

    <script src="/linuxHQ/scripts/desktopsFrontpage.js"></script>

  <?php include($path . "/modules/footer.tpl"); ?>
