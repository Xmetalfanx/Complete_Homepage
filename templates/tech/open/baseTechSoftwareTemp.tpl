<?php

	$sectionTitle = 'Software Section - ';

	include($path .'/modules/tech/baseTechHeader.tpl');

?>
<script src="/techHQ/scripts/software.js"></script>

<body onload="softwareData()">
 
  <?php include($path . '/modules/tech/techHQNavMenus.tpl'); ?>

	<div class="row">
		<div class="col-xs-12 col-md-2">
			<?php include($path . '/techHQ/modules/techSoftwareCol1.tpl'); ?>
		</div>


		<div id="softwareSection" class="col-xs-12 col-md-10">
