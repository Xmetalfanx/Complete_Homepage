<?php
  include $path . '/modules/linux/linuxBaseHeader.tpl';
?>

<body onload="getDistroData()">
  <div > 
  <?php include $path . '/modules/linux/linuxNavMenu.tpl'; ?>

    <div class="row flex-grow-1 w-100 mx-auto">
      <div class="col-xs-12 col-md-3 col-xl-2">
        <?php include $path . '/linuxHQ/modules/sections/linuxDistroCol1.tpl'; ?>
      </div>
      <div class="col-xs-12 col-md-9 col-xl-10 d-flex flex-wrap" id="distroSection" >

      </div>
    </div> <!-- Ends Row -->

<script src="/linuxHQ/scripts/distrosFrontpage.js"></script>

<?php include $path . "/modules/footer.tpl"; ?>