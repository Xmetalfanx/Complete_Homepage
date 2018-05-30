<?php
    $sitePath = '/home/xmetalx1/public_html';

    include $sitePath . '/linuxHQ/modules/variables/varInclude.php';
    include $sitePath . '/modules/linux/linuxBaseHeader.tpl';

?>

<div id="mainBody" class="row col-12">

  <div class="col-xm-12 col-sm-3 col-md-3 col-lg-2 col-xl-2">
      <?php include $sitePath . '/linuxHQ/modules/sections/linuxTICCol1.tpl'; ?>
  </div>

  <div class="col-xs-12 col-md-10">
  	  <?php include $sitePath . '/linuxHQ/modules/TICMainSection.tpl'; ?>
  </div>

</div>

<?php include $sitePath . "/modules/footer.tpl"; ?>
