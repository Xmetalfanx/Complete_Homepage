<?php

	$sectionTitle= 'Web Browser Section - ';
  include($path . '/modules/tech/baseTechHead.tpl');

?>

<body onload="browserAddonData()">
    <?php include $path . '/modules/tech/techHQNavMenus.tpl'; ?>

    <div class="main-section--right-wide">
      <div class="sidebar">
        <?php include $path . '/techHQ/modules/sections/techBrowsersCol1.tpl'; ?>
      </div>

      <div id="browserSection" class="primary-content">

      </div>

      <!-- include baseTechFooter -->
      <?php include $path . '/modules/tech/baseTechFooter.tpl'; ?>

    </div>


    <script type="application/javascript" src="/techHQ/scripts/browserAddons.js"></script>



