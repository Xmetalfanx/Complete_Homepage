<?php

	$sectionTitle= 'Web Browser Section - ';
	
  include $rootDir . '/modules/tech/baseTechHead.tpl';

?>

<body>

    <?php include $rootDir . '/modules/tech/techHQNavMenus.tpl'; ?>

    <div class="main-section">
      <div class="sidebar">
        <?php include $rootDir . '/techHQ/modules/sections/techBrowsersCol1.tpl'; ?>
      </div>

      <div id="browserSection" class="primary-content">

      </div>
    </div>

<!-- Changed from absolute path .. if something looks off, this could be why -->
<script src="/techHQ/scripts/browserAddons-min.js"></script>


<!-- include baseTechFooter -->
<?php include $rootDir . '/modules/tech/baseTechFooter.tpl'; ?>
