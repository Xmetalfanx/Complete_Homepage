<?php

	$sectionTitle = 'Software Section - ';

	include($path .'/modules/tech/baseTechHead.tpl');

?>
<script src="/techHQ/scripts/software.js"></script>

<body onload="softwareData()">
	<div >
		<?php include($path . '/modules/tech/techHQNavMenus.tpl'); ?>

			<div class="mainSection">
				<div class="col-xs-12 col-md-3 col-xl-2">
					<?php include($path . '/techHQ/modules/techSoftwareCol1.tpl'); ?>
				</div>


				<div id="softwareSection" class="col-xs-12 col-md-9 col-xl-10">
