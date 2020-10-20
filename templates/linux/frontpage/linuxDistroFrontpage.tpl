<?php
  include $path . '/modules/linux/linuxBaseHeader.tpl';
?>

<body onload="getDistroData()">
  <div class="main-section">
  <?php include $path . '/modules/linux/linuxNavMenu.tpl'; ?>

    <div class="sidebar col-xs-12 col-md-3 col-xl-2">
      <?php include $path . '/linuxHQ/modules/sections/linuxDistroCol1.tpl'; ?>
    </div>
    <div class="pContent col-xs-12 col-md-9 col-xl-10 d-flex flex-wrap" id="distroSection" >

    </div>

<script src="/linuxHQ/scripts/distrosFrontpage.js"></script>

<?php include $path . "/modules/footer.tpl"; ?>
