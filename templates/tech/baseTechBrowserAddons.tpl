<?php

	$sectionTitle= 'Web Browser Section - ';
  include($path . '/modules/tech/baseTechHead.tpl');

?>

<body onload="browserAddonData()">
    <div class="flexContainer">
      <?php include $path . '/modules/tech/techHQNavMenus.tpl'; ?>

      <div class="mainSection">
        <div class="col-xs-12 col-md-3 col-xl-2">
          <?php include $path . '/techHQ/modules/techBrowsersCol1.tpl'; ?>
        </div>

        <div id="browserSection" class="col-xs-12 col-md-9 col-xl-10">

        </div>
      </div>


    <script type="application/javascript" src="/techHQ/scripts/browserAddons.js"></script>


    <!-- include baseTechFooter -->
    <?php include $path . '/modules/tech/baseTechFooter.tpl'; ?>
