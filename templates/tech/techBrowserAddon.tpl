<?php

	$sectionTitle= 'Web Browser Section - ';
	include $sitePath . '/modules/tech/baseTechHeader.tpl';

?>

<body>
  <?php include $sitePath . '/modules/tech/techHQNavMenus.tpl'; ?>
  
  <div class="row col-12">
    <div class="col-xs-12 col-md-2">
      <?php include $sitePath . '/techHQ/modules/techBrowsersCol1.tpl'; ?>
    </div>

    <div id="browserSection" class="col-xs-12 col-md-10">

    </div>
  </div>

<!-- Changed from absolute path .. if something looks off, this could be why -->
<script src="/techHQ/scripts/browserAddons.js"></script>

	<!-- include baseTechFooter -->
	<?php include $sitePath . '/modules/tech/baseTechFooter.tpl'; ?>
