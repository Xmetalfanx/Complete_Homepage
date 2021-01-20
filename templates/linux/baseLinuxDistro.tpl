<?php

  $sectionTitle='Distrobution Section - ';

  require $path . '/modules/linux/linuxBaseHeader.tpl';

?>

<body onload="getDistroData()">
  <div >

  <?php require$path . '/modules/linux/linuxNavMenu.tpl'; ?>

<div class="main-section main-section--right-wide">
    <div class="sidebar">
      <?php require $path . '/linuxHQ/modules/sections/linuxDistroCol1.tpl';  ?>
    </div>

    <!-- id=linuxFrontPrimaryContent, is used in JS files to display content -->
    <div id="linuxFrontPrimaryContent" class="primaryContent">

    </div>
  </div>

<script src="/linuxHQ/scripts/distros.js"></script>

<?php include $path . "/modules/footer.tpl"; ?>
