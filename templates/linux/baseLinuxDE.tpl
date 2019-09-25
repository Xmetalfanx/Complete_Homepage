<?php
  
    require($path . '/modules/linux/linuxBaseHeader.tpl');
?>

<body onload="getDesktopData()">

  <?php require($path . '/modules/linux/linuxNavMenu.tpl'); ?>

  <div class="row">
    <div class="col-xm-12 col-md-2">
      <?php require($path . '/linuxHQ/modules/sections/linuxDECol1.tpl'); ?>
    </div>
    <div id="desktopSection" class="col-xm-12 col-md-10" >

    </div>
  </div>

<!-- This is not going to work long term -->
<script src="http://xmetal.x10.mx/linuxHQ/scripts/desktops.js"></script>


<?php require($path . "/modules/footer.tpl"); ?>