<?php
  
    require($path . '/modules/linux/linuxBaseHeader.tpl');
?>

<body onload="getDesktopData()">
  <div class="flexContainer">
  <?php require($path . '/modules/linux/linuxNavMenu.tpl'); ?>

  <div class="mainSection">
    <div class="col-xs-12 col-md-3 col-xl-2">
      <?php require($path . '/linuxHQ/modules/sections/linuxDECol1.tpl'); ?>
    </div>
    <div id="desktopSection" class="col-xs-12 col-md-9 col-xl-10" >

    </div>
  </div>

<!-- This is not going to work long term -->
<script src="http://xmetal.x10.mx/linuxHQ/scripts/desktops.js"></script>


<?php require($path . "/modules/footer.tpl"); ?>