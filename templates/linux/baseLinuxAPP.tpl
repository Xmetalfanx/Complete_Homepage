<?php

  $sectionTitle = 'Linux App Section - ';
  
  $path = getenv('DOCUMENT_ROOT'); 
  include $path . '/modules/linux/linuxBaseHeader.tpl';

?>
<?php include $path . '/modules/linux/linuxNavMenu.tpl'; ?>

<div class="row flex-grow-1">
    <div class="col-xs-12 col-md-2">
      <?php include $path . '/linuxHQ/modules/sections/linuxAppCol1.tpl'; ?>
    </div>

    <div class="col-xm-12 col-md-10">