<?php

  $sectionTitle='Desktop Section - ';

  require($path . '/modules/linux/linuxBaseHeader.tpl');

?>

<body onload="getDesktopData()">
  <div class="flexContainer">

    <?php include ($path . '/modules/linux/linuxNavMenu.tpl'); ?>

    <div class="mainSection">
      <div class="col-xm-12 col-md-2">
        <?php include($path . '/linuxHQ/modules/sections/linuxDECol1.tpl'); ?>
      </div>
      <div class="col-xs-12 col-md-9 col-xl-10 d-flex justify-content-between flex-wrap" id="desktopSection">

      </div>
    </div>

    <script src="/linuxHQ/scripts/desktopsFrontpage.js"></script>

  <?php include($path . "/modules/footer.tpl"); ?>
