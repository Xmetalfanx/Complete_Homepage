<?php

  require($_SERVER["DOCUMENT_ROOT"] . '/modules/linux/linuxBaseHeader.tpl');
  // The idea is that the variables.php file that contains $path = will be called in the linux or tech header files so the vars do not neeed to be in each individual page 

?>


<body onload="getDesktopData()">

  <?php require($path . '/modules/linux/linuxNavMenu.tpl'); ?>

  <div class="row">
    <div class="col-xm-12 col-md-2">
      <?php require($path . '/linuxHQ/modules/sections/linuxDECol1.tpl'); ?>
    </div>
    <div class="col-xm-12 col-md-10 d-flex justify-content-between flex-wrap" id="desktopSection" >

    </div>
  </div>
  
<script src="/linuxHQ/scripts/desktopsFrontpage.js"></script>

<?php require($path . "/modules/footer.tpl"); ?>