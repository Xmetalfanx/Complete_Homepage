<?php

	$sectionTitle= 'Web Browser Section - ';
	$path = getenv('DOCUMENT_ROOT');
  include $path . '/modules/tech/baseTechHead.tpl';

?>

<body>

    <?php include $path . '/modules/tech/techHQNavMenus.tpl'; ?>

    <div class="main-section">
      <div class="sidebar">
        <?php include $path . '/techHQ/modules/sections/techBrowsersCol1.tpl'; ?>
      </div>

      <div id="browserSection" class="primary-content">

      </div>
    </div>

<!-- Changed from absolute path .. if something looks off, this could be why -->
<script src="/techHQ/scripts/browserAddons-min.js"></script>


<!-- include baseTechFooter -->
<?php include $path . '/modules/tech/baseTechFooter.tpl'; ?>
