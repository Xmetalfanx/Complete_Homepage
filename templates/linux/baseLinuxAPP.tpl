<?php

  $sectionTitle = 'Linux App Section - ';
  
  $path = getenv('DOCUMENT_ROOT'); 
  include $path . '/modules/linux/linuxBaseHeader.tpl';

?>
<body>
<div class="flexContainer">

  <?php include $path . '/modules/linux/linuxNavMenu.tpl'; ?>

  <div class="row mainSection">
      <div class="col-xs-12 col-md-3 col-xl-2">
        <?php include $path . '/linuxHQ/modules/sections/linuxAppCol1.tpl'; ?>
      </div>

      <div class="col-xs-12 col-md-9 col-xl-10">