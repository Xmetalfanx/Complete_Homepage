<?php
    $sitePath = '/home/xmetalx1/public_html';

    include $sitePath . '/linuxHQ/modules/variables/varInclude.php';
    include $sitePath . '/modules/linux/linuxBaseHeader.tpl';

?>

<div class="row col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <div class="col-xm-12 col-sm-3 col-md-3 col-lg-2 col-xl-2">
      <?php include $sitePath . '/linuxHQ/modules/sections/linuxTICCol1.tpl'; ?>
  </div>

  <div class="col-xm-12 col-sm-12 col-md-9 col-lg-10 col-xl-10">
	  <?php include $sitePath . '/linuxHQ/modules/TICMainSection.tpl'; ?>
 </div>
