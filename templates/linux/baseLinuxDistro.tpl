<?php

  $sectionTitle='Distrobution Section - ';

  require $path . '/modules/linux/linuxBaseHeader.tpl';

?>

<body onload="getDistroData()">
  <div class="flexContainer">

  <?php require$path . '/modules/linux/linuxNavMenu.tpl'; ?>

<div class="row mainSection">
    <div class="col-xs-12 col-md-2">
      <?php require $path . '/linuxHQ/modules/sections/linuxDistroCol1.tpl';  ?>
    </div>
    <div id="distroSection" class="col-xs-12 col-md-10">

    </div>
  </div>

<script src="/linuxHQ/scripts/distros.js"></script>

<?php include $path . "/modules/footer.tpl"; ?>