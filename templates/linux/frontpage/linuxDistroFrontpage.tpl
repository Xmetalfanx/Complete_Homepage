<?php
  include $path . '/modules/linux/linuxBaseHeader.tpl';
?>

<body onload="getDistroData()">

  <?php include $path . '/modules/linux/linuxNavMenu.tpl'; ?>

  <div class="row flex-grow-1">
    <div class="col-xm-12 col-md-2">
      <?php include $path . '/linuxHQ/modules/sections/linuxDistroCol1.tpl'; ?>
    </div>
    <div class="col-xm-12 col-md-10 d-flex flex-wrap" id="distroSection" >

    </div>
  </div> <!-- Ends Row -->

<script src="/linuxHQ/scripts/distrosFrontpage.js"></script>

<?php include $path . "/modules/footer.tpl"; ?>