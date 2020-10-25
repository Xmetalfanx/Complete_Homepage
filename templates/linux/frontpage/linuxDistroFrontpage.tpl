<?php
  include $path . '/modules/linux/linuxBaseHeader.tpl';
?>

<body onload="getDistroData()">
  <?php include $path . '/modules/linux/linuxNavMenu.tpl'; ?>
  <div class="main-section main-section--right-wide">
    <div class="sidebar">
      <?php include $path . '/linuxHQ/modules/sections/linuxDistroCol1.tpl'; ?>
    </div>
    <div class="primaryContent" id="distroSection" >

    </div>
  </div>

<script src="/linuxHQ/scripts/distrosFrontpage.js"></script>

<?php include $path . "/modules/footer.tpl"; ?>
