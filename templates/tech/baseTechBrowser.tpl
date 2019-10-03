<?php

	$sectionTitle= 'Web Browser Section - ';
  include($path . '/modules/tech/baseTechHeader.tpl');

?>

<body>
  <?php include $path . '/modules/tech/techHQNavMenus.tpl'; ?>
  
  <div class="row flex-grow-1">
    <div class="col-xs-12 col-md-2">
      <?php include $path . '/techHQ/modules/techBrowsersCol1.tpl'; ?>
    </div>

    <div id="browserSection" class="col-xs-12 col-md-10">

    </div>
  </div>


<script src="../techHQ/scripts/browsers.js"></script>


	<!-- include baseTechFooter -->
	<?php include $path . '/modules/tech/baseTechFooter.tpl'; ?>
