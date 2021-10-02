<?php

  $sectionTitle='Distrobution Section - ';

  require $siteRoot . '/modules/linux/linuxBaseHeader.tpl';

?>

<body onload="getDistroData()">


  <?php require $siteRoot . '/modules/linux/linuxNavMenu.tpl'; ?>

<div class="main-section--right-wide">
    <div class="sidebar">
      <?php require $siteRoot . '/linuxHQ/modules/sections/linuxDistroCol1.tpl';  ?>
    </div>

    <!-- id=linux-primary-content, is used in JS files to display content -->
    <div id="linux-primary-content" class="primary-content">

    </div>
  </div>

<script src="/linuxHQ/scripts/distros-min.js"></script>

<?php include $siteRoot . "/modules/footer.tpl"; ?>
