<?php
  include $path . '/modules/linux/linuxBaseHeader.tpl';
?>

<body onload="getDistroData()">
  <?php include $path . '/modules/linux/linuxNavMenu.tpl'; ?>
  <div class="main-section--right-wide">
    <div class="sidebar">
      <?php include $path . '/linuxHQ/modules/sections/linuxDistroCol1.tpl'; ?>
    </div>

    <!-- flex stuff here to keep layout working -->
    <!-- id=linux-primary-content, is used in JS files to display content -->

    <div id="linux-primary-content" class="primary-content">

    </div>
  </div>

<script src="/linuxHQ/scripts/distrosFrontpage-min.js"></script>

<?php include $path . "/modules/footer.tpl"; ?>
