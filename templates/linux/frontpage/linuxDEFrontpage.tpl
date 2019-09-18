<?php
  $sitePath = "/home/xmetalx1/public_html";
  require($path .'/modules/linux/linuxBaseHeader.tpl');
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