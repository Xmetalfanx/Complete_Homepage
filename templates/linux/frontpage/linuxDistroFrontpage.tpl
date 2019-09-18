<?php
  require($path . '/modules/linux/linuxBaseHeader.tpl');
?>

<body onload="getDistroData()">

  <?php require($path . '/modules/linux/linuxNavMenu.tpl'); ?>

  <div class="row">
    <div class="col-xm-12 col-md-2">
      <?php require($path . '/linuxHQ/modules/sections/linuxDistroCol1.tpl'); ?>
    </div>
    <div class="col-xm-12 col-md-10 d-flex flex-wrap" id="distroSection" >

    </div>
  </div> <!-- Ends Row -->
  
<script src="/linuxHQ/scripts/distrosFrontpage.js"></script>

<?php require($path . "/modules/footer.tpl"); ?>