<?php

	$sectionTitle= 'Web Browser Section - ';
  include($path . '/modules/tech/baseTechHead.tpl');

?>

<body onload="browserAddonData()">
    <?php include $path . '/modules/tech/techHQNavMenus.tpl'; ?>

    <div class="main-section main-section--right-wide">
      <div class="sidebar">
        <?php include $path . '/techHQ/modules/techBrowsersCol1.tpl'; ?>
      </div>

      <div id="browserSection" class="primaryContent">

      </div>
    </div>


    <script type="application/javascript" src="/techHQ/scripts/browserAddons.js"></script>


    <!-- include baseTechFooter -->
    <?php include $path . '/modules/tech/baseTechFooter.tpl'; ?>
